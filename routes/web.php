<?php


Route::get('/', function(){
    return view('welcome');
});


Route::group(['middleware' => ['checkUserLogin']], function(){
    Route::get('/dashboard', 'AuthController@dashboard');
    Route::match(['get', 'post'], '/admin/add-category', 'CategoryController@addCategory');
    Route::get('/admin/view-categories', 'CategoryController@viewCategories')->name('view.categories');
});

Route::get('/register', 'AuthController@register')->name('auth.showRegister')->middleware('checkUserNotLogin');
Route::get('/login', 'AuthController@login')->name('auth.showLogin')->middleware('checkUserNotLogin');

Route::post('/register', 'AuthController@postRegister')->name('auth.postRegister')->middleware('checkUserNotLogin');
Route::post('/login', 'AuthController@postLogin')->name('auth.postLogin')->middleware('checkUserNotLogin');
Route::get('/logout', 'AuthController@logout')->name('auth.logout');
