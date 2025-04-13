<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
})->name('about');  // Named route for "About Me"

Route::get('/contact', function () {
    return view('contact');
})->name('contact');  // Named route for "Contact"

Route::get('/projects', function () {
    return view('projects');
})->name('projects');  // Named route for "Projects"
