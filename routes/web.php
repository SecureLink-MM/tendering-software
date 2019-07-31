<?php


// Route::get('/welcome', function(){
//     return view('welcome');
// });

Route::get('/', 'IndexController@index');

Route::match(['get', 'post'], '/admin', 'AdminController@login')->name('admin.login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin', 'middleware' => ['auth']], function(){
    Route::get('/dashboard', 'AdminController@dashboard');
    Route::resource('/department', 'DepartmentController');
    Route::resource('/tender', 'TenderController');
});

Route::get('/logout', 'AdminController@logout')->name('admin.logout');
