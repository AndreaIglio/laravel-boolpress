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
    return view('pages/home');
});



//Api
Route::get('articles', 'PageController@articles_api');
Route::get('categories', 'PageController@categories_api');
Route::get('tags', 'PageController@tags_api');
