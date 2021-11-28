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

Auth::routes();

Route::middleware(['adminMiddleware'])->group(function () {

    Route::get('/identi', 'functionController@identi');
    Route::get('/admin', 'functionController@admin');
    Route::get('/export', 'functionController@export');
    Route::get('/sporocila', 'functionController@messages');
    Route::get('/zbrisi-sporocilo/{messageID}','functionController@deleteMessage');
});


Route::post('/poslji-sporocilo','messageController@store');

Route::get('/change-lang/{lang}', 'viewController@changeLang');
Route::redirect('/', '/si');


//pages
Route::group(['prefix' => '{language}'], function () {


    Route::get('/', 'viewController@home')->name('home');
    Route::get('/izdelki-in-reference', 'viewController@references')->name('references');
    Route::get('/o-nas', 'viewController@aboutUs')->name('aboutUs');
    Route::get('/kontakt', 'viewController@contact')->name('contact');
});
