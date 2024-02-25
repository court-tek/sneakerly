<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Admin\ArticlesController;
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

Route::get('/', [BlogController::class, 'index']);

Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function() {
    Route::get('dashboard', 'AdminController@dashboard')->middleware(['auth', 'is_admin'])->name('dashboard.dashboard');
    Route::get('articles-create', 'ArticlesController@create')->middleware(['auth', 'is_admin']);
    Route::get('articles-all', 'ArticlesController@index')->middleware(['auth', 'is_admin']);
    Route::get('articles-edit/{id}', 'ArticlesController@edit')->middleware(['auth', 'is_admin'])->name('articles.edit');
    Route::get('photos/{id}', 'PhotosController@index')->middleware(['auth', 'is_admin'])->name('photos.index');
    Route::get('photos-create/{id}', 'PhotosController@create')->middleware(['auth', 'is_admin'])->name('photos.create');
    Route::get('photos/{id}/edit/{photo_id}', 'PhotosController@edit')->middleware(['auth', 'is_admin'])->name('photos.edit');
    Route::post('photos/{id}', [PhotosController::class, 'store'])->name('photos');
    Route::patch('photos/{id}/update/{photo_id}', [PhotosController::class, 'update'])->name('photos.update');
    Route::get('/photos/{id}/delete/{photo_id}', [PhotosController::class, 'destroy'])->name('photos.destroy');
    Route::post('/articles', [ArticlesController::class, 'store'])->name('articles');
    Route::patch('/articles/{id}', [ArticlesController::class, 'update'])->name('articles.update');
    Route::get('/articles-delete/{id}', [ArticlesController::class, 'destroy'])->name('articles.destroy');
}); 

// Route::get('/admin/dashboard', 'AdminController@dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
