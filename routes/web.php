<?php

use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProfileController;
use App\Models\Location;
use App\Models\Logging;
use Illuminate\Support\Facades\Route;
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('dashboard', [
        'locations' => Location::query()->get(),
        'logs' => Logging::query()->get(),
    ]);
})->name('dashboard');

Route::post('/location-store', [LocationController::class, 'store'])->name('location-store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
