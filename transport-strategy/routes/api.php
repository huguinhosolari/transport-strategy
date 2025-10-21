<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;

Route::get('/travel/plan', [TravelController::class, 'plan']);



