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

Route::get('/', function () {return view('homepages.welcome');});
Route::get('/theartist', function () {return view('homepages.theartist');});
Route::get('/program/how_it_works', function () {return view('homepages.how_it_works');});
Route::get('/program/nutrition', function () {return view('homepages.nutrition');});
Route::get('/program/motivation', function () {return view('homepages.motivation');});
Route::get('/program/community', function () {return view('homepages.community');});
   Route::Resource('testimonials','TestimonialController');

Auth::routes();

Route::group(['middleware' => 'auth'],function(){
});

Route::get('/home', 'HomeController@index')->name('home');

