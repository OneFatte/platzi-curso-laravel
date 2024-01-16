<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/blog', function () {
    // Consulta a base de datos
    $posts = [
        ['id' => 1, 'title' => 'Post 1', 'slug' => 'post-11111'],
        ['id' => 2, 'title' => 'Post 2', 'slug' => 'post-2sdsdsd'],
        ['id' => 3, 'title' => 'Post 3', 'slug' => 'post-sdsdsds3']
    ];
    return view('blog', ['posts' => $posts]);
})->name('blog');

Route::get('/blog/{slug}', function ($slug) {
    // Consulta a base de datos por un solo dato
    $post = $slug;

    return view('post', ['post' => $post]);
})->name('post');
