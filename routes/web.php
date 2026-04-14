<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkProgramController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profil', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profil', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('program-kerja', WorkProgramController::class);
    // Assignment management routes
    Route::post('program-kerja/{workProgram}/assign', [WorkProgramController::class, 'assignUser'])->name('program-kerja.assign');
    Route::delete('program-kerja/{workProgram}/unassign/{user}', [WorkProgramController::class, 'unassignUser'])->name('program-kerja.unassign');

    // Weekly targets management routes
    Route::get('program-kerja/{workProgram}/target-mingguan/create', [WorkProgramController::class, 'createWeeklyTarget'])->name('program-kerja.weekly-targets.create');
    Route::post('program-kerja/{workProgram}/target-mingguan', [WorkProgramController::class, 'storeWeeklyTarget'])->name('program-kerja.weekly-targets.store');
    Route::get('program-kerja/{workProgram}/target-mingguan/{weeklyTarget}/edit', [WorkProgramController::class, 'editWeeklyTarget'])->name('program-kerja.weekly-targets.edit');
    Route::patch('program-kerja/{workProgram}/target-mingguan/{weeklyTarget}', [WorkProgramController::class, 'updateWeeklyTarget'])->name('program-kerja.weekly-targets.update');
    Route::delete('program-kerja/{workProgram}/target-mingguan/{weeklyTarget}', [WorkProgramController::class, 'destroyWeeklyTarget'])->name('program-kerja.weekly-targets.destroy');

    // User management routes - only for kabag
    Route::middleware(['auth', 'can:isKabag'])->group(function () {
        Route::resource('pengguna', UserController::class);
    });
});

require __DIR__.'/auth.php';
