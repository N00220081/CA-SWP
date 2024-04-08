<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsageController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProfileController;


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

// Member
Route::resource('/member', MemberController::class)->middleware(['auth']);

// Usage
Route::resource('/usage', UsageController::class)->middleware(['auth']);





require __DIR__.'/auth.php';
