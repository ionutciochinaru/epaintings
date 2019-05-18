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
Route::get('/products', 'eProductsController@index');

Route::get('/dashboardAdmin',  'Admin\AdminDashboardController@index')->middleware('admin');
Route::get('/', 'HomeController@index');

Auth::routes();

