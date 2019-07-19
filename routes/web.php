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

Route::get('/home/index/index', 'Home\IndexController@index');

Route::get('/admin/index/index', 'Admin\IndexController@index');

Route::group(['prefix' => 'test'], function (){
    Route::get('/test1', 'TestController@test1');
    Route::get('/add', 'TestController@add');
    Route::get('/del', 'TestController@del');
    Route::get('/update', 'TestController@update');
    Route::get('/select', 'TestController@select');
    Route::get('/test2', 'TestController@test2');
    Route::get('/test3', 'TestController@test3');
});


