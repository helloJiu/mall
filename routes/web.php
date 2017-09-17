<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('admin/brand/index', 'Admin\BrandController@index');

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'brand'], function () {
        Route::get('index', 'Admin\BrandController@index');
        Route::get('add', 'Admin\BrandController@add');
        Route::post('add', 'Admin\BrandController@addPost');
        Route::post('get', 'Admin\BrandController@getList');
        Route::post('validate', 'Admin\BrandController@validateField');
    });

});

Route::group(['prefix' => 'member'], function () {
    Route::get('login', 'Home\UserController@login');
    Route::get('index', 'Home\UserController@index');
    Route::post('add', 'Admin\BrandController@addPost');
    Route::post('get', 'Admin\BrandController@getList');
    Route::post('validate', 'Admin\BrandController@validateField');
});