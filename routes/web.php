<?php

use App\Http\Controllers\AirportController;
use App\Http\Controllers\PlaneController;
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


Route::get('/planes', PlaneController::class, 'index')->name('planes.index');
Route::get('/planes/create', PlaneController::class, 'create')->name('planes.create');
Route::post('/planes/store', PlaneController::class, 'store')->name('planes.store');
Route::get('/planes/{id}/show', PlaneController::class, 'show')->name('planes.show');
Route::get('/planes/{id}/edit', PlaneController::class, 'edit')->name('planes.edit');
Route::post('/planes/{id}/update', PlaneController::class, 'update')->name('planes.update');
Route::post('/planes/{id}/destroy', PlaneController::class, 'destroy')->name('planes.destroy');
