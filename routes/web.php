<?php

use Illuminate\Support\Facades\Route;






Route::get('/account', 'MainController@account');

Route::get('/contact', 'MainController@contact');


Route::get('/', 'MainController@home');

Route::get('/processing', 'MainController@processing');

Route::get('/profile', 'MainController@profile')->name('profile');
Route::post('/profile/update', 'MainController@profileUpdate');

Route::get('/videos', 'MainController@videos');

Route::get('/withdraw', 'MainController@withdraw');

Route::get('/videos/complete', 'MainController@videoComplete');
Route::get('/website/complete', 'MainController@webComplete');


//Authentication

Route::get('/register', 'UserAuthentication@registerView');
Route::post('/register', 'UserAuthentication@store');
Route::get('/login', 'UserAuthentication@loginView')->name('login');
Route::post('/login', 'UserAuthentication@login');
Route::get('/logout', 'UserAuthentication@logout');

Route::get('/test/user', 'UserAuthentication@getUser');


//admin pages

Route::get('/admin', 'AdminController@index');

Route::get('/admin/video', 'AdminController@video');
Route::post('/admin/video/add', 'AdminController@addVideo');
Route::get('/admin/video/delete/{id}', 'AdminController@deleteVideo');

Route::get('/admin/website', 'AdminController@website');
Route::post('/admin/website/add', 'AdminController@addWebsite');
Route::get('/admin/website/edit/{id}', 'AdminController@editUrlView');
Route::post('/admin/website/edit/{id}', 'AdminController@editUrl');
Route::get('/admin/website/delete/{id}', 'AdminController@deleteUrl');

Route::get('/admin/ads', 'AdminController@adsView');
Route::get('/admin/ads/video/update', 'AdminController@updateVideoAd');
Route::get('/admin/ads/banner/update', 'AdminController@updateBannerAd');
