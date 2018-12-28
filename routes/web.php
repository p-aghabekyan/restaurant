<?php

Route::get('/', function () {
    return view('site.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function()
{
    Route::get('/', 'RestaurantsController@index');
    Route::resource('/restaurants', 'RestaurantsController');
    Route::resource('/languages', 'LanguagesController');
    Route::resource('/categories', 'CategoriesController');
    Route::resource('/menus', 'MenusController');
    Route::resource('/images', 'ImagesController');
    Route::resource('/staff', 'StaffController');
    Route::resource('/staff-types', 'StaffTypeController');
    Route::resource('/hols', 'HolsController');
    Route::resource('/service-types', 'ServiceTypeController');
    Route::resource('/services', 'ServicesController');
    Route::post('/getImages', 'ImagesController@getImages');
    Route::post('/getData', 'AjaxController@getData');
    Route::post('/getForm', 'AjaxController@getForm');
    Route::post('/changeLang', 'AjaxController@changeLang');
});

Route::get('getThis', 'AjaxController@getThis');

Route::get('/book','BookController@index');
