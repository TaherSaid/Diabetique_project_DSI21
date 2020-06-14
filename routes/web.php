<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::get('/', 'welcomControlle@index');
Route::get('/pass_test', 'passtestController@index');
Route::get('/now_more','now_moreController@index');
Route::get('/about', 'aboutController@index');
Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/actualiter', 'actualiterController@index');
    // Route::get('/actualiter', 'actualiterController@index');
    Route::get('/dashboardAdmin', 'AdminController@index')->name('admin');
    Route::get('/profille', 'ProfileController@index');
    Route::POST('/save_Profile', 'ProfileController@new_profile_red');
    Route::get('/new profile', 'ProfileController@new_profile');
    Route::POST('/add_post', 'postController@add_post');
    Route::DELETE('/delete_post', 'postController@delete_post');
    Route::POST('/save_val', 'passtestController@scoreedit')->name('home');

});

