<?php

use Illuminate\Support\Facades\Route;

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

// landing page
Route::get('/', 'MainController@index');
Route::get('/signin', 'AuthController@signin');
Route::get('/signup', 'AuthController@signup');
Route::get('/support', 'MainController@support');
Route::get('/template', 'MainController@template');
Route::get('/price', 'MainController@price');
Route::get('/cart', 'MainController@cart');
Route::get('/resetpassword', 'AuthController@resetpassword');

// admin
Route::get('/admin', 'AdminController@index');
Route::get('/admin/transaction', 'AdminController@transaction');
Route::get('/admin/voucher', 'AdminController@voucher');
Route::get('/admin/newvoucher', 'AdminController@newvoucher');
