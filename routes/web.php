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
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::group(['prefix' => 'posts', 'as' => 'post.'], function (){
    Route::get('', ['uses' => 'PostController@index', 'as' => 'index']);
    Route::get('/create', ['uses' => 'PostController@create', 'as' => 'create']);
    Route::post('/store', ['uses' => 'PostController@store', 'as' => 'store']);
    Route::get('{slug}', ['uses' => 'PostController@show', 'as' => 'show']);
    Route::get('{slug}/edit', ['uses' => 'PostController@edit', 'as' => 'edit']);
    Route::put('{post}/update', ['uses' => 'PostController@update', 'as' => 'update']);
    Route::delete('{post}', ['uses' => 'PostController@delete', 'as' => 'delete']);
});



Route::get('/home', 'HomeController@index')->name('home');
