<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Legal Case Route
Route::get('legalCase', function () {
    return 'There will be show all legal cases here.';
});

// Lawyer Profile Route
Route::get('lawyer', function () {
    return 'There will be show all lawyers here.';
});

// About Us Route
Route::get('aboutUs', function () {
    return 'There will be show about us information here.';
});

// contact Us Route
Route::get('contact', function () {
    return 'There will be show contact information here.';
});
// Post Case Route
Route::get('postCase', function () {
    return 'There will be show post case information here.';
});
// Explore Cases Route
Route::get('explore-cases', function () {
    return 'There will be show all cases here.';
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
