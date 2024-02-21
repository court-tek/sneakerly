<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Admin\ArticlesController;
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
    Route::get('dashboard', 'AdminController@dashboard')->middleware('auth');
    Route::get('articles-create', 'AdminController@create')->middleware('auth');
    Route::get('articles-all', 'ArticlesController@index')->middleware('auth');
    Route::get('articles-edit/{id}', 'ArticlesController@edit')->middleware('auth');
    Route::post('/articles', [ArticlesController::class, 'store'])->name('articles');
    Route::patch('/articles/{id}', [ArticlesController::class, 'update'])->name('articles.update');
    Route::delete('/articles/{id}', [ArticlesController::class, 'destroy'])->name('articles.destroy');
})->middleware(['auth', 'verified']);

// Route::get('/admin/dashboard', 'AdminController@dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
