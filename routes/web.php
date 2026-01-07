<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('/', function () {
        return 'Blog Index';
    })->name('index');

    Route::get('/{slug}', function ($slug) {
        return 'Blog Show: ' . $slug;
    })->name('show');
});

Route::prefix('shop')->name('shop.')->group(function () {
    Route::get('/', function () {
        return 'Shop Index';
    })->name('index');

    Route::get('/{slug}', function ($slug) {
        return 'Shop Show: ' . $slug;
    })->name('show');
});
