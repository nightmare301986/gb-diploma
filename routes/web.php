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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
//Route::get('/', 'App\Http\Controllers\PostController@index');

Route::get('/', 'App\Http\Controllers\PostController@index')->name('blog.index');

Route::get('post/index', 'App\Http\Controllers\PostController@index')->name('post.index');

Route::get('post/search', 'App\Http\Controllers\PostController@search')->name('post.search');

Route::get('post/create', 'App\Http\Controllers\PostController@create')->name('post.create');

Route::post('post/store', 'App\Http\Controllers\PostController@store')->name('post.store');

Route::get('post/show/{id}', 'App\Http\Controllers\PostController@show')->name('post.show');

Route::get('post/edit/{id}', 'App\Http\Controllers\PostController@edit')->name('post.edit');

Route::patch('post/update/{id}', 'App\Http\Controllers\PostController@update')->name('post.update');

Route::delete('post/destroy/{id}', 'App\Http\Controllers\PostController@destroy')->name('post.destroy');