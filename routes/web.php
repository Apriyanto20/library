<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoanPackageController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SourceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('fakultas', FakultasController::class)->middleware(['auth']);
Route::resource('major', MajorController::class)->middleware(['auth']);
Route::resource('kelas', KelasController::class)->middleware(['auth']);
Route::resource('genre', GenreController::class)->middleware(['auth']);
Route::resource('source', SourceController::class)->middleware(['auth']);
Route::resource('package', LoanPackageController::class)->middleware(['auth']);
Route::resource('mahasiswa', MahasiswaController::class)->middleware(['auth']);
Route::resource('book', BooksController::class)->middleware(['auth']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);