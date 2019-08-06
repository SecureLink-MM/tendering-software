<?php


Route::get('/', 'IndexController@index');
Route::get('/awardtender', 'IndexController@awardtender');
Route::get('/tender/{slug}', 'IndexController@tenderDetails')->name('tender.details');
Route::get('/tender/department/{slug}', 'IndexController@tenderByDepartment')->name('tender.department');

Route::match(['get', 'post'], '/admin', 'AdminController@login')->name('admin.login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin', 'middleware' => ['auth']], function(){
    Route::get('/dashboard', 'AdminController@dashboard');
    Route::resource('/department', 'DepartmentController');
    Route::resource('/tender', 'TenderController');
    Route::resource('/award-tender', 'AwardTenderController');

    // User Profile
    Route::get('user/{id}', 'UserController@edit');
});

Route::get('/logout', 'AdminController@logout')->name('admin.logout');
