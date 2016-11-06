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
 
Route::get('auth/linkedin',  [
  'as' => 'authlinkedin', 'uses' => 'Auth\AuthController@redirectToLinkedin'
] );
Route::get('linkedin/callback',[
  'as' => 'authlinkedincallback', 'uses' => 'Auth\AuthController@handleLinkedinCallback'
] );
 
Route::get('auth/twitter',[
  'as' => 'authtwitter', 'uses' =>  'Auth\AuthController@redirectToTwitter'
]);
Route::get('twitter/callback', [
  'as' => 'authtwittercallback', 'uses' => 'Auth\AuthController@handleTwitterCallback'
]);
 
Route::get('auth/google', [
  'as' => 'authgoogle', 'uses' => 'Auth\AuthController@redirectToGoogle'
]);
Route::get('google/callback',[
  'as' => 'authgooglecallback', 'uses' => 'AuthController@handleGoogleCallback'
]);
 
Route::get('auth/facebook',[
  'as' => 'authfacebook', 'uses' => 'Auth\AuthController@redirectToFacebook'
] );
Route::get('facebook/callback', [
  'as' => 'authfacebookcallback', 'uses' => 'Auth\AuthController@handleFacebookCallback'
]);
 

Auth::routes();

Route::get('/home', 'HomeController@index');
