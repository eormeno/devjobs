<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VacantController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', [VacantController::class, 'index'])->middleware(['auth', 'verified'])->name('vacancies.index');
Route::get('vacancies/create', [VacantController::class, 'create'])->middleware(['auth', 'verified'])->name('vacancies.create');
Route::get('vacancies/{vacant}/edit', [VacantController::class, 'edit'])->middleware(['auth', 'verified'])->name('vacancies.edit');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
