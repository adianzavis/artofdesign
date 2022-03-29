<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'WebController@index');
Route::get('/home', 'WebController@index');
Route::get('/tray', 'WebController@tray');
Route::get('/double-color', 'WebController@doubleColor');
Route::get('/photo-printing', 'WebController@photoPrinting');
Route::get('/starry-sky', 'WebController@starrySky');
Route::get('/art-perforation', 'WebController@artPerforation');
Route::get('/floating-ceilings', 'WebController@floatingCeilings');
Route::get('/translucent', 'WebController@translucent');
Route::get('/floating-lines', 'WebController@floatingLines');
Route::get('/stretch-ceilings', 'WebController@stretchCeilings');
Route::get('/light-solutions', 'WebController@lightSolutions');
Route::get('/light-boxes', 'WebController@lightBoxes');
Route::get('/certificates', 'WebController@certificates');
Route::post('/contact', 'WebController@sendMail');
Route::get('/contact', 'WebController@contact');
Route::get('/privacy-policy', 'WebController@privacyPolicy');

Route::group(['prefix' => '/{language?}', 'middleware' => 'locale'], function() {
	Route::get('/', 'WebController@index')->name('home');
	Route::get('/home', 'WebController@index')->name('home');
	Route::get('/tray', 'WebController@tray')->name('tray');
	Route::get('/double-color', 'WebController@doubleColor')->name('double-color');
	Route::get('/photo-printing', 'WebController@photoPrinting')->name('photo-printing');
	Route::get('/starry-sky', 'WebController@starrySky')->name('starry-sky');
	Route::get('/art-perforation', 'WebController@artPerforation')->name('art-perforation');
	Route::get('/floating-ceilings', 'WebController@floatingCeilings')->name('floating-ceilings');
	Route::get('/translucent', 'WebController@translucent')->name('translucent');
	Route::get('/floating-lines', 'WebController@floatingLines')->name('floating-lines');
	Route::get('/stretch-ceilings', 'WebController@stretchCeilings')->name('stretch-ceilings');
	Route::get('/light-solutions', 'WebController@lightSolutions')->name('light-boxes');
	Route::get('/certificates', 'WebController@certificates')->name('certificates');
	Route::get('/light-boxes', 'WebController@lightBoxes');
	Route::get('/contact', 'WebController@contact')->name('contact');
    Route::get('/privacy-policy', 'WebController@privacyPolicy');
});
