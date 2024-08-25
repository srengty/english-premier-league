<?php

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\ProfileController;
use App\Models\Team;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/players', [PlayerController::class, 'index'])->name('players');
Route::get('/players/create', [PlayerController::class, 'create'])->name('players.create');  
Route::get('/players/add',[PlayerController::class, 'add'])->name('players.add');
Route::match(['get','post'],'/players/store', [PlayerController::class, 'store'])->name('players.store');