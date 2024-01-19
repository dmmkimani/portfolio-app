<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/projects/yourspace', function () {
    return view('projects.yourspace');
})->name('yourspace');

Route::get('/projects/ux', function () {
    return view('projects.ux');
})->name('ux');

Route::get('/projects/dmmkimani', function () {
    return view('projects.dmmkimani');
})->name('dmmkimani');

Route::get('/projects/simulated-driving-system', function () {
    return view('projects.sds');
})->name('sds');

Route::get('/projects/land-cover-classification', function () {
    return view('projects.lcc');
})->name('lcc');

Route::get('/img/{filename}', function ($filename) {
    $path = public_path('assets/img/') . $filename;
    return readfile($path);
})->name('img.show');