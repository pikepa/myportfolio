<?php

use App\Http\Livewire\User\Profile;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Messages\ContactMe;
use App\Http\Livewire\Dashboard\Dashboard;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UploadImageController;
use App\Http\Livewire\Messages\DisplayMessages;
use App\Http\Controllers\Images\ImageController;

Route::redirect('/', 'root');
Route::mediaLibrary();
/**
 * App Routes.
 */
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/message', DisplayMessages::class)->name('messages');
});

Route::get('/uploadtest', function () {
    return view('livewire.images.upload');
});

/* Home Routes web security */
Route::group(['middleware' => 'web'], function () {
    Route::get('/contactme', ContactMe::class);

    Route::get('/', [ProductController::class, 'index'])->name('root');

    Route::get('/theartist', function () {
        return view('homepages.theartist');
    });
    Route::get('/atwork', function () {
        return view('homepages.atwork');
    });
    Route::get('/materials', function () {
        return view('homepages.materials');
    });
    Route::get('/coming_soon', function () {
        return view('homepages.comingsoon');
    });
    Route::get('/loadimages', function () {
        return view('images.load');
    });
});

Route::get('/status/{status}', [ProductController::class, 'status'])->name('productStatus');

Route::get('/bycategory/{id}', [CategoryController::class, 'bycategory'])->name('bycategory');

Route::resource('product', ProductController::class);
Route::resource('category', CategoryController::class);

Auth::routes();

Route::name('images.')->group(function () {
    Route::get('/images', [UploadImageController::class, 'index'])->name('index');
    Route::get('/images/{product}/load', [UploadImageController::class, 'load'])->name('load');
    Route::post('/images/upload', [UploadImageController::class, 'upload'])->name('upload');
    
    Route::get('/images/{product}/{image}/featured', [ImageController::class, 'make_featured'])->name('makefeatured');
    Route::get('/images/{image}', [ImageController::class, 'show'])->name('show');
    Route::get('/images/{product}/{image}/delete', [UploadImageController::class, 'delete'])->name('delete');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile/{id}', [UserController::class, 'show'])->name('user.profile');
    Route::patch('/users/{id}', [UserController::class, 'update'])->name('user.update');
});
