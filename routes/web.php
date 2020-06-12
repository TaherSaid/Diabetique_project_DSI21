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

// Route::get('/', function () {
//     return view('welcome@index');
// });
Route::get('/', 'welcomControlle@index');
Route::get('/pass_test', 'passtestController@index');
Route::get('/now_more','now_moreController@index');
Route::get('/about', 'aboutController@index');
Auth::routes();



Auth::routes();

Route::middleware('auth')->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/booking', 'BookingController');
});

