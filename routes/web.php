<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\PhotosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function() {
    // ADmin home page
    Route::get('dashboard', 'ArticleController@home')->middleware(['auth', 'is_admin'])->name('dashboard.dashboard');
    
    // Article routes
    Route::get('articles-create', 'ArticleController@create')->middleware(['auth', 'is_admin']);
    Route::get('articles-all', 'ArticleController@index')->middleware(['auth', 'is_admin']);
    Route::get('articles-edit/{id}', 'ArticleController@edit')->middleware(['auth', 'is_admin'])->name('articles.edit');
    Route::post('/articles', [ArticleController::class, 'store'])->name('articles');
    Route::patch('/articles/{id}', [ArticleController::class, 'update'])->name('articles.update');
    Route::get('/articles-delete/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');

    // Photo routes
    Route::get('photos/{id}', 'PhotosController@index')->middleware(['auth', 'is_admin'])->name('photos.index');
    Route::get('photos-create/{id}', 'PhotosController@create')->middleware(['auth', 'is_admin'])->name('photos.create');
    Route::get('photos/{id}/edit/{photo_id}', 'PhotosController@edit')->middleware(['auth', 'is_admin'])->name('photos.edit');
    Route::post('photos/{id}', [PhotosController::class, 'store'])->name('photos.store');
    Route::get('photos/{id}/featured/{photo_id}', [PhotosController::class, 'featured'])->name('photos.update');
    Route::get('/photos/{id}/delete/{photo_id}', [PhotosController::class, 'destroy'])->name('photos.destroy');
}); 

Route::prefix('/2024')->namespace('App\Http\Controllers\Front')->group(function() {
    // Main Blog Routes
    Route::get('/', 'ArticleController@index');
    Route::get('article/show/{id}', 'ArticleController@show');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
