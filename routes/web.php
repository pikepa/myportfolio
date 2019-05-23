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

Route::get('/', 'ProductController@index')->name('root');
Route::get('/theartist', function () {return view('homepages.theartist');});
Route::get('/whyborneo', function () {return view('homepages.whyborneo');});
Route::get('/materials', function () {return view('homepages.materials');});

Route::resource('product','ProductController');


Auth::routes();

Route::group(['middleware' => 'auth'],function(){
});

Route::get('/home', 'HomeController@index')->name('home');

