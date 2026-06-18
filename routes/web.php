<?php

use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\BabyEventController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BabyEventController::class, 'index'])->name('index');
Route::post('/events', [BabyEventController::class, 'store'])->name('events.store');
// TODO: nog maken
//Route::get('/events/{event}/edit', [BabyEventController::class, 'edit'])->name('events.edit');
// TODO: nog maken
//Route::put('/events/{event}', [BabyEventController::class, 'update'])->name('events.update');

Route::delete('/events/{event}', [BabyEventController::class, 'destroy'])->name('events.destroy');

// Register routes
Route::view('/register', 'auth.register')->middleware('guest')->name('register');
Route::post('/register', Register::class)->middleware('guest')->name('register.store');

// Logout routes
Route::post('/logout', Logout::class)->middleware('auth');

// Login routes

Route::view('/login', 'auth.login')->middleware('guest')->name('login');
Route::post('login', Login::class)->middleware('guest');
