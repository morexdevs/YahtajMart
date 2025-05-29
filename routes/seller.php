<?php

use Illuminate\Support\Facades\Route;

Route::prefix('seller')->name('seller.')->middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('seller');
    })->name('dashboard');
});
