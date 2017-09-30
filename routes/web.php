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
    return view('pages.welcome');
});

Route::get('home', function () {
	return view('pages.welcome');
});

Route::get('events', function () {
	return view('pages.events');
});

Route::get('gallery', function () {
	return view('pages.gallery');
});
	
Route::get('information', function () {
	return view('pages.information');
});
	
Route::get('litters', function () {
	return view('pages.litter');
});
			
Route::get('meet', function () {
	return view('pages.meet');
});
			
Route::get('place_order', function () {
	return view('pages.place_order');
});
					
Route::get('training', function () {
	return view('pages.training');
});
						
Route::get('gallery', function () {
	return view('pages.gallery');
});