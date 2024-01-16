<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', function () {
    return 'Ruta blog';
});

Route::get('/blog/{slug}', function ($slug) {
    return $slug;
});

Route::get('/buscar', function (Request $request) {
    return $request->all();
});

Route::get('/about', function () {
    return 'Ruta about';
});
