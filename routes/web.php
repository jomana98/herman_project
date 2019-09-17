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
Route::post('/result',"QuestionController@showResult")->name('result');
Route::get('/logOut', function () {
    return view('logIn');
})->name('logOut');
Route::get('/home',"QuestionController@homeView" )->name('home');
Route::get('/shortQuestion',"QuestionController@shortQuestionView" )->name('shortQuestionView');
Route::post('/home',"LoginController@store")->name('homePage');
Route::post('/shortResult',"QuestionController@shortQuestionResult")->name('shortResult');
Route::post('/printResult','QuestionController@print');
Route::post('/UpdateSecretNumber',"adminController@update")->name('UpdateSecretNumber');
Route::post('/updatePassworde',"adminController@updatePassworde")->name('updatePassworde');
