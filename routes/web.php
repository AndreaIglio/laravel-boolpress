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


Route::resource('articles','ArticlesController');
Route::resource('categories', 'CategoriesController');
Route::resource('tags', 'TagsController');



//Api
Route::get('articlesApi', 'PageController@articles_api');
Route::get('categoriesApi', 'PageController@categories_api');
Route::get('tagsApi', 'PageController@tags_api');
