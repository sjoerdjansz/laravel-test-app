<?php

use App\Http\Controllers\BabyEventController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BabyEventController::class, 'index']);



