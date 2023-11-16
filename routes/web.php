<?php

use App\Http\Controllers\GuestPagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/')->group(function () {
    Route::get('/', [GuestPagesController::class, 'index'])->name('home');
    Route::get('/about', [GuestPagesController::class, 'about'])->name('about');
    Route::get('/contact', [GuestPagesController::class, 'contact'])->name('contact');
    // Route::get('/partners', [GuestPagesController::class, 'index'])->name('partners');
    // Route::get('/campaigns', [GuestPagesController::class, 'index'])->name('campaigns');
    // Route::get('/', [GuestPagesController::class, 'index'])->name('home');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
