<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home
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

// Contact Us Route
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

// Single Case Detail Route
Route::get('case/{id}', function ($id) {
    return "Details of case with ID: $id";
});

// Lawyer Profile by ID Route
Route::get('lawyer/{id}', function ($id) {
    return "Profile of lawyer with ID: $id";
});

// Web Developer Page (accessible by guests or authenticated)
Route::get('developer', function () {
    return view('abc');
});

// sending a parameter to the test page
Route::get('test', function () {
    $name ='MUHAMMAD WASIM';
    $email = 'muhammadwasim.cusit@gmail.com';
    // return view('test', compact('name', 'email'));
    // return view('test', ['name' => $name, 'email' => $email]);
    return view('test')->with(['name' => $name, 'email' => $email]);
});


// If you want this page to be only for logged-in users, uncomment the below instead:
// ->middleware('auth')

// Dashboard (for authenticated & verified users only)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// User Profile Routes (only for authenticated users)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Fallback Route (custom 404 page)
Route::fallback(function () {
    return view('errors_404'); // resources/views/errors_404.blade.php
});

require __DIR__.'/auth.php';
