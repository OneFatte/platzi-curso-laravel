<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Ruta home';
});

Route::get('/blog', function () {
    return 'Ruta blog';
});

Route::get('/post/{slug}', function ($slug) {
    return $slug;
});

Route::get('/contact', function () {
    return 'Ruta contact';
});

Route::get('/about', function () {
    return 'Ruta about';
});
