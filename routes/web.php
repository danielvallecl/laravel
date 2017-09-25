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

Route::get('test/{name}', 'TestController@index');

Route::get('user', 'TestController@user');

Route::get('about', 'TestController@about');

//{name} becomes a variable and any string will lead to said page.
