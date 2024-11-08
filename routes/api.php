<?php

use App\Http\Controllers\API\BooksAPIController;
use App\Http\Controllers\API\DetailLoanTransactionAPIController;
use App\Models\major;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\SourceController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\LoanPackageController;
use App\Http\Controllers\API\GenreAPIController;
use App\Http\Controllers\API\KelasAPIController;
use App\Http\Controllers\API\MajorAPIController;
use App\Http\Controllers\API\SourceAPIController;
use App\Http\Controllers\API\FakultasAPIController;
use App\Http\Controllers\API\MahasiswaAPIController;
use App\Http\Controllers\API\LoanPackageAPIController;
use App\Http\Controllers\API\LoanTransactionAPIController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\LoantransactionsController;

Route::get('/fakultas', [FakultasAPIController::class, 'get_all'])->name('fakultas.get');
Route::post('/fakultas_add', [FakultasController::class, 'store']);
Route::patch('/fakultas_update/{id}', [FakultasController::class, 'update']);
Route::delete('/fakultas_delete/{id}', [FakultasController::class, 'destroy']);

Route::get('/major', [MajorAPIController::class, 'get_all'])->name('major.get');
Route::post('/major_add', [MajorController::class, 'store']);
Route::patch('/major_update/{id}', [MajorController::class, 'update']);
Route::delete('/major_delete/{id}', [MajorController::class, 'destroy']);

Route::get('/kelas', [KelasAPIController::class, 'get_all'])->name('kelas.get');
Route::post('/kelas_add', [KelasController::class, 'store']);
Route::patch('/kelas_update/{id}', [KelasController::class, 'update']);
Route::delete('/kelas_delete/{id}', [KelasController::class, 'destroy']);

Route::get('/genre', [GenreAPIController::class, 'get_all'])->name('genre.get');
Route::post('/genre_add', [GenreController::class, 'store']);
Route::patch('/genre_update/{id}', [GenreController::class, 'update']);
Route::delete('/genre_delete/{id}', [GenreController::class, 'destroy']);

Route::get('/source', [SourceAPIController::class, 'get_all'])->name('source.get');
Route::post('/source_add', [SourceController::class, 'store']);
Route::patch('/source_update/{id}', [SourceController::class, 'update']);
Route::delete('/source_delete/{id}', [SourceController::class, 'destroy']);

Route::get('/loan_package', [LoanPackageAPIController::class, 'get_all'])->name('loan_package.get');
Route::post('/loan_package_add', [LoanPackageController::class, 'store']);
Route::patch('/loan_package_update/{id}', [LoanPackageController::class, 'update']);
Route::delete('/loan_package_delete/{id}', [LoanPackageController::class, 'destroy']);

Route::get('/mahasiswa', [MahasiswaAPIController::class, 'get_all'])->name('mahasiswa.get');
Route::post('/mahasiswa_add', [MahasiswaController::class, 'store']);
Route::patch('/mahasiswa_update/{id}', [MahasiswaController::class, 'update']);
Route::delete('/mahasiswa_delete/{id}', [MahasiswaController::class, 'destroy']);

Route::get('/book', [BooksAPIController::class, 'get_all'])->name('book.get');
Route::post('/book_add', [BooksController::class, 'store']);
Route::patch('/book_update/{id}', [BooksController::class, 'update']);
Route::delete('/book_delete/{id}', [BooksController::class, 'destroy']);

Route::get('/loanTransactions', [LoanTransactionAPIController::class, 'get_all'])->name('loanTransactions.get');
Route::get('/detailloanTransactions', [DetailLoanTransactionAPIController::class, 'get_all'])->name('detailloanTransactions.get');
Route::get('/detail/{id}', [LoanTransactionAPIController::class, 'get_where'])->name('detail.get');



// Route::get('/genre', [FakultasAPIController::class, 'get_all'])->name('genre.get');
// Route::post('/genre_add', [FakultasController::class, 'store']);
// Route::patch('/genre_update/{id}', [FakultasController::class, 'update']);
// Route::delete('/genre_delete/{id}', [FakultasController::class, 'destroy']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
