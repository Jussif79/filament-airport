<?php

use App\Http\Controllers\AirportController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/airports', [AirportController::class,'index'])->name('airports.index');
Route::post('/airports/{airport}/update', [AirportController::class,'update'])->name('airports.update');
Route::get('/airports/{airport}/show', [AirportController::class,'show'])->name('airports.show');
Route::get('/airports/{airport}/edit', [AirportController::class,'edit'])->name('airports.edit');
Route::get('/airports/create', [AirportController::class,'create'])->name('airports.create');
Route::post('/airports/store', [AirportController::class,'store'])->name('airports.store');
