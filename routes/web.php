<?php

use Illuminate\Support\Facades\Route;






Route::get('/account', 'MainController@account');

Route::get('/contact', 'MainController@contact');
Route::get('/policy', function(){
    return view('policy');
});

Route::get('/', 'MainController@home');

Route::get('/processing', 'MainController@processing');

Route::get('/verify', 'MainController@verify');
Route::get('/verify/complete', 'MainController@verifyComplete');

Route::get('/profile', 'MainController@profile')->name('profile');
Route::post('/profile/update', 'MainController@profileUpdate');

Route::get('/videos', 'MainController@videos');
Route::get('/website', 'MainController@website');
Route::get('/app', 'MainController@app');

Route::get('/withdraw', 'MainController@withdraw');
Route::post('/withdraw/submit', 'MainController@withdrawSubmit');

Route::get('/videos/complete/{id}', 'MainController@videoComplete');
Route::get('/website/complete/{id}', 'MainController@webComplete');
Route::get('/app/complete/{id}', 'MainController@appComplete');



//Authentication

Route::get('/register', 'UserAuthentication@registerView');
Route::post('/register', 'UserAuthentication@store');
Route::get('/login', 'UserAuthentication@loginView')->name('login');
Route::post('/login', 'UserAuthentication@login');
Route::get('/logout', 'UserAuthentication@logout');

Route::get('/forgot', function(){return view('forgot');});
Route::post('/forgot', 'UserAuthentication@forgot');

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
Route::post('/admin/ads/video/update', 'AdminController@updateVideoAd');
Route::post('/admin/ads/banner/update', 'AdminController@updateBannerAd');

Route::get('/admin/app', 'AdminController@appView');
Route::post('/admin/app/add', 'AdminController@addApp');
Route::get('/admin/app/edit/{id}', 'AdminController@editAppView');
Route::post('/admin/app/edit/{id}', 'AdminController@editApp');
Route::get('/admin/app/delete/{id}', 'AdminController@deleteApp');

Route::get('/admin/withdraws', 'AdminController@withdraw');
Route::get('/admin/withdraws/done/{id}', 'AdminController@withdrawDone');

Route::get('/admin/verify/reset/', 'AdminController@verifyReset');
