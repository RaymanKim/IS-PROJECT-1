<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/book-an-appointment', function () {
    return view('book-an-appointment');
})->name('book-an-appointment');

Route::get('/form-diagnosis', function () {
    return view('form-diagnosis');
})->name('form-diagnosis');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::prefix('services')->group(function () {
    Route::get('/', function () {
        return view('services');
    })->name('services');

    Route::get('/service1', function () {
        return view('service1');
    })->name('service1');

    Route::get('/service2', function () {
        return view('service2');
    })->name('service2');

    Route::get('/service3', function () {
        return view('service3');
    })->name('service3');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
