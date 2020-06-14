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
Route::POST('/send_feedback', 'FeedbackController@store');
Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/profille', 'ProfileController@index');
    Route::POST('/save_Profile', 'ProfileController@new_profile_red');
    Route::get('/new profile', 'ProfileController@new_profile');
    Route::POST('/add_post', 'postController@add_post');
    Route::DELETE('/delete_post', 'postController@delete_post');
    Route::GET('/allmesure','mesureController@index');
    Route::POST('/add','mesureController@store');
    Route::GET('/addmesure','mesureController@addmesure');
    Route::POST('/save_val', 'passtestController@scoreedit')->name('home');

    Route::get('/dashboardAdmin', 'AdminController@index');
    Route::GET('/updateNowMore', 'now_moreController@update');
    Route::GET('/allFeedback', 'FeedbackController@show');
    Route::POST('/updateNowMoreContent', 'now_moreController@updateNowMore');
    Route::GET('/deletefeed/{id}','FeedbackController@delete');
    Route::POST('/updateQcm', 'passtestController@updateQcm');
    Route::GET('/updateallQcm', 'passtestController@indexDashboard');
    Route::GET('/deletequestion/{id}', 'passtestController@deletequestion');
    Route::GET('/allqcm', 'passtestController@allqcm');
    Route::POST('/addquestion', 'passtestController@addNewQuestion');
    Route::GET('/home_modification', 'welcomControlle@update');
    Route::POST('/updateSection1', 'welcomControlle@updateSection1');






});

