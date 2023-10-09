<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\LoanController;

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
/*Route::get('/', function () {
    return view('welcome');
});*/
/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('welcome');
});


//begin::People Routes
//Route::resource('people', PersonController::class);
Route::get('/people', [PersonController::class, 'index'])->name('people.index');
Route::get('/people/create',[PersonController::class, 'create'])->name('people.create');
Route::post('/people',[PersonController::class, 'store'])->name('people.store');
Route::get('/people/{people}',[PersonController::class, 'edit'])->name('people.edit');
Route::put('/people/{people}',[PersonController::class, 'update'])->name('people.update');
Route::delete('/people/{people}',[PersonController::class, 'destroy'])->name('people.destroy');
//end::People Routes

//begin::Books Routes
//Route::resource('books', BookController::class);
Route::get('/books', [BookController::class, 'index'])->name('book.index');
Route::get('/books/create',[BookController::class, 'create'])->name('book.create');
Route::post('/books',[BookController::class, 'store'])->name('book.store');
Route::get('/books/{books}',[BookController::class, 'edit'])->name('book.edit');
Route::put('/books/{books}',[BookController::class, 'update'])->name('book.update');
Route::delete('/books/{books}',[BookController::class, 'destroy'])->name('book.destroy');
//end::Books Routes

//begin::Loan Routes
//Route::resource('loan', LoanController::class);
Route::get('/loan', [LoanController::class, 'index'])->name('loan.index');
Route::get('/loan/create',[LoanController::class, 'create'])->name('loan.create');
Route::post('/loan',[LoanController::class, 'store'])->name('loan.store');
Route::get('/loan/{loan}',[LoanController::class, 'edit'])->name('loan.edit');
Route::put('/loan/{loan}',[LoanController::class, 'update'])->name('loan.update');
Route::delete('/loan/{loan}',[LoanController::class, 'destroy'])->name('loan.destroy');
//end::Loan Routes

