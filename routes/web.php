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
    Route::get('/test4', 'TestController@test4');
    Route::post('/test5', 'TestController@test5')->name('test5');

    Route::get('/test6', 'TestController@test6');
    Route::get('/test7', 'TestController@test7');
    Route::get('/test8', 'TestController@test8');
    Route::get('/test9', 'TestController@test9');
    Route::any('/test10', 'TestController@test10');
    Route::any('/test11', 'TestController@test11');
    Route::any('/test13', 'TestController@test13');
    Route::any('/test14', 'TestController@test14');
    Route::any('/test15', 'TestController@test15');

    Route::get('/test16', 'TestController@test16');
    Route::get('/test17', 'TestController@test17');
    Route::get('/test18', 'TestController@test18');
    Route::get('/test19', 'TestController@test19');
});



