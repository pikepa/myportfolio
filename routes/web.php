<?php

use App\Http\Livewire\User\Profile;
use App\Http\Livewire\Messages\ContactMe;
use App\Http\Livewire\Dashboard\Dashboard;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Livewire\Messages\DisplayMessages;

Route::redirect('/', 'root');

/**
 * App Routes.
 */


Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/message', DisplayMessages::class)->name('messages');
});

/* Home Routes web security */
Route::group(['middleware' => 'web'], function () {
    Route::get('/contactme', ContactMe::class);

    Route::get('/', [ProductController::class ,'index'])->name('root');

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

Route::get('/status/{status}', [ProductController::class ,'status'])->name('productStatus');

Route::get('/bycategory/{id}', [CategoryController::class , 'bycategory'])->name('bycategory');

Route::resource('product', ProductController::class);
Route::resource('category', CategoryController::class);

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
