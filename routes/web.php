<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuperAdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome',[
        'title' => 'Procurement System',
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard',[
        'title' => 'Profile',
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified', 'role:super-admin'])->prefix('superadmin')->group(function () {
    Route::get('/', [PagesController::class, 'superadmin'])->name('superadmin.index');
    Route::post('/logout', [PagesController::class, 'destroy'])->name('logout');
    Route::get('/user-list', [SuperAdminController::class, 'index'])->name('superadmin.users');
    Route::get('/create', [SuperAdminController::class, 'create'])->name('superadmin.create');
});


Route::middleware(['auth', 'verified', 'role:officer'])->prefix('officer')->group(function () {
    Route::get('/', [PagesController::class, 'officer'])->name('officer.index');
});

Route::middleware(['auth', 'verified', 'role:supplier'])->prefix('supplier')->group(function () {
    Route::get('/', [PagesController::class, 'supplier'])->name('supplier.index');
});

require __DIR__ . '/auth.php';
