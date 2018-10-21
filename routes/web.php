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

Route::group(['prefix' => 'backoffice'], function()
{  
Route::get('/','Admin\DashboardController@index')->name('admin_home');
Route::post('/adminlogin','Admin\AdminloginController@adminlogin')->name('chack_login');
Route::get('/logout','Admin\DashboardController@dologout')->name('admin_out');
Route::get('/reset','Admin\AdminloginController@reset')->name('reset');
Route::get('/login','Admin\AdminloginController@index')->name('admin_login');
Route::get('/resetpsw','Admin\AdminloginController@resetview')->name('view_reset');
});
///////page////////////////////
Route::get('/', 'Client\HomeController@index')->name('home');

