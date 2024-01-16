<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', function () {
    // Consulta a base de datos
    $posts = [
        ['id' => 1, 'title' => 'Post 1', 'slug' => 'post-1'],
        ['id' => 2, 'title' => 'Post 2', 'slug' => 'post-2'],
        ['id' => 3, 'title' => 'Post 3', 'slug' => 'post-3']
    ];
    return view('blog', ['posts' => $posts]);
});

Route::get('/blog/{slug}', function ($slug) {
    // Consulta a base de datos por un solo dato
    $post = $slug;

    return view('post', ['post' => $post]);
});

Route::get('/buscar', function (Request $request) {
    return $request->all();
});

Route::get('/about', function () {
    return 'Ruta about';
});
