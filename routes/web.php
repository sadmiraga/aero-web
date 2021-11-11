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


//pages


Route::get('/change-lang/{lang}', 'viewController@changeLang');



Route::redirect('/', '/si');

Route::group(['prefix' => '{language}'], function () {


    Route::get('/', 'viewController@home')->name('home');
    Route::get('/izdelki-in-reference', 'viewController@references')->name('references');
    Route::get('/o-nas', 'viewController@aboutUs')->name('aboutUs');
    Route::get('/kontakt', 'viewController@contact')->name('contact');
});
