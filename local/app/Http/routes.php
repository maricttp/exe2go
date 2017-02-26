<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'HomeController@careers');
Route::post('/', 'HomeController@index');
Route::get('/careers', 'HomeController@careers');
Route::get('/about', 'HomeController@about');
Route::get('/results', 'HomeController@results');
Route::get('/expertise', 'HomeController@expertise');
