<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VacantController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotificationController;

Route::get('/', HomeController::class)->name('home');

Route::get('dashboard', [VacantController::class, 'index'])->middleware(['auth', 'verified', 'recruiter'])->name('vacancies.index');
Route::get('vacancies/create', [VacantController::class, 'create'])->middleware(['auth', 'verified'])->name('vacancies.create');
Route::get('vacancies/{vacant}/edit', [VacantController::class, 'edit'])->middleware(['auth', 'verified'])->name('vacancies.edit');
Route::get('vacancies/{vacant}', [VacantController::class, 'show'])->name('vacancies.show');
Route::get('notifications', NotificationController::class)->middleware(['auth', 'verified', 'recruiter'])->name('notifications');
Route::get('candidates/{vacant}', [CandidateController::class, 'index'])->name('candidates.index');

Route::middleware('auth')->group(function () {
	Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
	Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
	Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
