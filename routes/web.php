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

use App\Category;


Route::group(['middleware'=>['auth']],function(){
Route::get('/', function () {
    if(session('company',Category::UCELL) == Category::UCELL)
    {
        session(['company' => Category::UCELL]);
    }

    return view('home');
})->name('home');

Route::resource('internet','InternetController');
Route::resource('message','MessageController');
Route::resource('minute','MinuteController');
Route::resource('new','NewController');
Route::resource('tariff','TariffController');
Route::resource('code','CodeController');
Route::resource('categories','CategoryController');
Route::get('/setCompany/{company}','CompanyController@changeCompany')->name('set-company');
Route::get('/clear',function(){

    \Artisan::call('optimize:clear');
});
}

);
Route::get('/home','HomeController@index');




Auth::routes();


