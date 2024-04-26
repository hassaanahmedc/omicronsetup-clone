<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/home', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/index', function () {
    return view('index');
});