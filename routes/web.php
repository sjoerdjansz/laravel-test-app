<?php

use App\Http\Controllers\BabyEventController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BabyEventController::class, 'index'])->name('index');
Route::post('/events', [BabyEventController::class, 'store'])->name('events.store');
// TODO: nog maken
Route::get('/events/{event}/edit', [BabyEventController::class, 'edit'])->name('events.edit');
// TODO: nog maken
Route::put('/events/{event}', [BabyEventController::class, 'update'])->name('events.update');

Route::delete('/events/{event}', [BabyEventController::class, 'destroy'])->name('events.destroy');




