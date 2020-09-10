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

Route::get('/', function () {
    return view('facebookLogin');
})->name('login');
Route::get('/home', function () {
    return view('welcome');
})->middleware('auth');

Route::get('auth/facebook', 'Auth\LoginController@redirectToFacebook');
Route::get('auth/facebook/callback', 'Auth\LoginController@handleFacebookCallback'); 

Route::get('logout' , 'Auth\LoginController@logout')->name('logout');


// instgram route
Route::get('login/instagram',
 'Auth\LoginController@redirectToInstagramProvider')->name('instagram.login');

Route::get('login/instagram/callback','Auth\LoginController@instagramProviderCallback')->name('instagram.login.callback');