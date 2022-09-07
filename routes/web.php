<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;


Route::get('home', [HomeController::class, 'index'])->name('home.index');

Route::get('/', [InfoController::class, 'index'])->name('info.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

require __DIR__.'/auth.php';
