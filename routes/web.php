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

Route::redirect('/', 'blog');

Auth::routes();

Route::get('/blog', 'Web\PageController@blog')->name('blog');
Route::get('show/{slug}', 'Web\PageController@post')->name('post');
Route::get('categorie/{slug}', 'Web\PageController@category')->name('category');
Route::get('etiquette/{slug}', 'Web\PageController@tag')->name('tag');
