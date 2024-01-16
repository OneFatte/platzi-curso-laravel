<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/**
 * Rutas por separado
 *  Route::get('/', [PageController::class, 'home'])->name('home');
 *  Route::get('/blog', [PageController::class, 'blog'])->name('blog');
 *  Route::get('/blog/{slug}', [PageController::class, 'post'])->name('post');
 */


// Rutas en grupo
Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/blog/{slug}', 'post')->name('post');
});
