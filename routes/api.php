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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/displayAll', 'apiController@displayAll');
Route::get('/idents', 'apiController@getIdents');


Route::get('/search/{query}', 'apiController@search');


Route::post('/newProduct', 'apiController@newProduct');

Route::post('/export', 'apiController@export');
Route::post('/import', 'apiController@import');

Route::post('/editProduct', 'apiController@editProduct');
