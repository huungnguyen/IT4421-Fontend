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

Route::get('/', 'HomeController@index');

Route::get('/preview', 'HomeController@preview');

Route::get('/delivery', 'HomeController@delivery');

Route::get('/about', 'HomeController@about');

Route::get('/contact', 'HomeController@contact');

Route::get('/news', 'HomeController@news');

Route::get('/login', 'AuthController@login');

Route::get('/register', 'AuthController@register');


Route::get('/account', 'CustomerController@index');

Route::get('/account-address', 'CustomerController@getAddress');

Route::get('/test', 'TestController@test');
Route::get('/test/login', 'TestController@login');
Route::get('/test/logout', 'TestController@logout');
