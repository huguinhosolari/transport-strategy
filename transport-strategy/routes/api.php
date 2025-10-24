<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;

Route::get('/travel/plan', [TravelController::class, 'plan']);

Route::get('/travel/options', [TravelController::class, 'getTravelOptions']);



