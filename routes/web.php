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
Route::get('/coming_soon', function () {return view('homepages.comingsoon');});

Route::get('/status/{status}', 'ProductController@status')->name('productStatus');
Route::get('/category/{id}', 'CategoryController@bycategory')->name('bycategory');

Route::resource('product','ProductController');


Auth::routes();
    Route::get('/images','UploadImageController@index');
    Route::get('/images/{product}/load','UploadImageController@load');
    Route::get('/images/{product}/{image}/delete','UploadImageController@delete');
    Route::get('/images/{product}/{image}/featured','UploadImageController@featured');
    Route::get('/images/{image}','UploadImageController@show');
    Route::post('/images/upload' , 'UploadImageController@upload');
    
Route::group(['middleware' => 'auth'],function(){
});


