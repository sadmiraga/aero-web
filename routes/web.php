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

Route::get('/', function () {
    return view('layouts.mainLayout');
});

Route::get('/izdelki-in-reference', 'viewController@references');
Route::get('/o-nas', 'viewController@aboutUs');
Route::get('/kontakt', 'viewController@contact');
