<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/getCategory/{company}','ApiController@getCategory');
Route::get('/getInternet/{company}/{category_id}','ApiController@getInternet');
Route::get('/getCode/{company}','ApiController@getCode');
Route::get('/getMessage/{company}/{category_id}','ApiController@getMessage');
Route::get('/getMinute/{company}/{category_id}','ApiController@getMinute');
Route::get('/getDiscount/{company}','ApiController@getDiscount');
Route::get('/getTariff/{company}/{category_id}','ApiController@getTariff');


