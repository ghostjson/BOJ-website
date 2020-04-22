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




Route::get('/account', 'MainController@account');

Route::get('/contact', 'MainController@contact');


Route::get('/', 'MainController@home');

Route::get('/processing', 'MainController@processing');

Route::get('/profile', 'MainController@profile');

Route::get('/videos', 'MainController@videos');

Route::get('/withdraw', 'MainController@withdraw');


//Authentication

Route::get('/register', 'UserAuthentication@registerView');
Route::post('/register', 'UserAuthentication@store');
Route::get('/login', 'UserAuthentication@loginView')->name('login');
Route::post('/login', 'UserAuthentication@login');
Route::get('/logout', 'UserAuthentication@logout');

Route::get('/test/user', 'UserAuthentication@getUser');



