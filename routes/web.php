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
    return view('auth');
});
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
 
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('auth/login', function () {
    return view('auth');
});
Route::get('auth/linkedin', 'Auth\AuthController@redirectToLinkedin');
Route::get('linkedin/callback', 'Auth\AuthController@handleLinkedinCallback');
 
Route::get('auth/twitter', 'Auth\AuthController@redirectToTwitter');
Route::get('twitter/callback', 'Auth\AuthController@handleTwitterCallback');
 
Route::get('auth/google', 'Auth\AuthController@redirectToGoogle');
Route::get('google/callback', 'AuthController@handleGoogleCallback');
 
Route::get('auth/facebook', 'Auth\AuthController@redirectToFacebook');
Route::get('facebook/callback', 'Auth\AuthController@handleFacebookCallback');