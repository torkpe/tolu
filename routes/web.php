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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/editprofile', 'EditprofileController@index');
Route::post('/editprofile', 'EditprofileController@edit');
Route::resource('bankaccount', 'BankaccountController');
Route::resource('providehelp', 'ProvidehelpController');
Route::resource('gethelp', 'GethelpController');
Route::resource('confirm', 'confirmController');
Route::resource('upline', 'UplineController');
Route::delete('/home/{home}', 'HomeController@destroy');