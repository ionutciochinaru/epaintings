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


//Web routs
Route::get('/', 'HomeController@index');
Route::get('/paintings', 'PaintingsController@paintings');

//Admin Routs
Route::get('/dashboardAdmin',  'Admin\AdminDashboardController@index')->middleware('admin');
Route::get('/dashboardAdmin/paintings/',  'Admin\AdminDashboardController@allpaintings')->middleware('admin');
Route::post('/dashboardAdmin/paintings/',  'Admin\AdminDashboardController@storePainting')->middleware('admin');
Route::get('/dashboardAdmin/paintings/create',  'Admin\AdminDashboardController@createPainting')->middleware('admin');

//Auth Routs
Auth::routes();

