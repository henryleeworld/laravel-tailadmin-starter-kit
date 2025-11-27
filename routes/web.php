<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');
Route::get('/dashboard', function () {
    return view('dashboard', ['title' => 'Dashboard']);
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
