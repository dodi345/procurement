<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified', 'role:super-admin'])->prefix('superadmin')->group(function () {
    Route::get('/', [PagesController::class, 'superadmin'])->name('superadmin.index');
});

Route::middleware(['auth', 'verified', 'role:officer'])->prefix('officer')->group(function () {
    Route::get('/', [PagesController::class, 'officer'])->name('officer.index');
});

Route::middleware(['auth', 'verified', 'role:vendor'])->prefix('vendor')->group(function () {
    Route::get('/', [PagesController::class, 'vendor'])->name('vendor.index');
});

require __DIR__ . '/auth.php';
