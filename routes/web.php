<?php

Route::redirect('/', 'dashboard');

/**
 * App Routes.
 */
Route::group(['middleware' => 'auth'], function () {
    Route::livewire('dashboard', 'dashboard.dashboard')->name('dashboard');
    Route::livewire('profile', 'user.profile');
    Route::livewire('message', 'messages.display-messages')->name('messages');
});

/* Home Routes web security */
Route::group(['middleware' => 'web'], function () {
    Route::livewire('/contactme', 'messages.contact-me');

    Route::get('/', 'ProductController@index')->name('root');
    Route::get('/theartist', function () {
        return view('homepages.theartist');
    });
    Route::get('/whyborneo', function () {
        return view('homepages.whyborneo');
    });
    Route::get('/materials', function () {
        return view('homepages.materials');
    });

    Route::get('/coming_soon', function () {
        return view('homepages.comingsoon');
    });
});

Route::get('/status/{status}', 'ProductController@status')->name('productStatus');

Route::get('/bycategory/{id}', 'CategoryController@bycategory')->name('bycategory');

Route::resource('product', 'ProductController');
Route::resource('category', 'CategoryController');
// Route::resource('page', 'PageController');

Auth::routes();

Route::name('images.')->group(function () {
    Route::get('/images', 'UploadImageController@index')->name('index');
    Route::get('/images/{product}/load', 'UploadImageController@load')->name('load');
    Route::get('/images/{product}/{image}/delete', 'UploadImageController@delete')->name('delete');
    Route::get('/images/{product}/{image}/featured', 'UploadImageController@featured')->name('makefeatured');
    Route::get('/images/{image}', 'UploadImageController@show')->name('show');
    Route::post('/images/upload', 'UploadImageController@upload')->name('upload');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile/{id}', 'UserController@show')->name('user.profile');
    Route::patch('/users/{id}', 'UserController@update')->name('user.update');
});
