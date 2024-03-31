<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[DashboardController::class,"index"])->name('dashboard')->middleware("auth","verified");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get("/kampus/{id}/index/",[\App\Http\Controllers\KampusController::class,"index"])->name("kampus.index");
Route::get("/kampus/{id}/create/",[\App\Http\Controllers\KampusController::class,"create"])->name("kampus.create");
Route::post("/kampus/store/",[\App\Http\Controllers\KampusController::class,"store"])->name("kampus.store");

Route::get("/okul/{id}/index/",[\App\Http\Controllers\OkulController::class,"index"])->name("okul.index");
Route::get("/okul/{id}/create/",[\App\Http\Controllers\OkulController::class,"create"])->name("okul.create");
Route::post("/okul/store/",[\App\Http\Controllers\OkulController::class,"store"])->name("okul.store");

Route::resource("kurum",\App\Http\Controllers\KurumController::class);
//Route::resource("kampus",\App\Http\Controllers\KampusController::class);


require __DIR__.'/auth.php';
