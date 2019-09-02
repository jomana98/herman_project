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
    return view('logIn');
});
Route::get('/result', function () {
    return view('result');
});

Route::post('/home',"LoginController@store")->name('homePage');
Route::post('/UpdateSecretNumber',"adminController@update")->name('UpdateSecretNumber');
Route::post('/updatePassworde',"adminController@updatePassworde")->name('updatePassworde');
