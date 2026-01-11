<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
})->name('home');

Route::get('/copertine', function () {
    return view('copertine');
})->name('copertine');

Route::get('/chi-siamo', function () {
    return view('chi-siamo');
})->name('chi-siamo');

Route::get('/contattaci', function () {
    return view('contattaci');
})->name('contattaci');

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
