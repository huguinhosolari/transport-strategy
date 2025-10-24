<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/transport', function() { return view('transport'); })->name('transport.index');
Route::post('/transport', [App\Http\Controllers\TransportController::class, 'store'])->name('transport.store');

Route::post('/travel/viaje', [App\Http\Controllers\TravelController::class, 'viaje'])->name('travel.viaje');
Route::get('/travel/options', [App\Http\Controllers\TravelController::class, 'getTravelOptions'])->name('travel.options');