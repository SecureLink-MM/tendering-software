<?php


Route::get('/', function(){
    return view('welcome');
});

Route::match(['get', 'post'], '/admin', 'AdminController@login')->name('admin.login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function(){
    Route::get('/admin/dashboard', 'AdminController@dashboard');
    // Admin Category Route
    Route::match(['get', 'post'], '/admin/add-category', 'CategoryController@addCategory');
    Route::match(['get', 'post'], '/admin/edit-category/{id}', 'CategoryController@editCategory');
    Route::match(['get', 'post'], '/admin/delete-category/{id}', 'CategoryController@deleteCategory');
    Route::get('/admin/view-categories', 'CategoryController@viewCategories')->name('view.categories');
    // Admin Tender Route
    Route::match(['get', 'post'], '/admin/add-tender', 'TenderController@addTender');
    Route::match(['get', 'post'], '/admin/edit-tender/{id}', 'TenderController@editTender');
    Route::match(['get', 'post'], '/admin/delete-tender/{id}', 'TenderController@deleteTender');
    Route::get('/admin/view-tenders', 'TenderController@viewTenders')->name('view.tenders');
});

Route::get('/logout', 'AdminController@logout')->name('admin.logout');
