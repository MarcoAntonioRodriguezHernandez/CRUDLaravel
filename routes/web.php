<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\CategorieController;

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
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',
    [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');


//begin::Authors Routes
//Route::resource('authors', AuthorsController::class);
Route::get('/authors', [AuthorsController::class, 'index'])->name('authors.index');
Route::post('/authors',[AuthorsController::class, 'store'])->name('authors.store');
Route::get('/authors/{authors}',[AuthorsController::class, 'show'])->name('authors.show');
Route::put('/authors/{authors}',[AuthorsController::class, 'update'])->name('authors.update');
Route::delete('/authors/{authors}',[AuthorsController::class, 'destroy'])->name('authors.destroy');
//end::Authors Routes

//begin::People Routes
//Route::resource('people', PersonController::class);
Route::get('/people', [PersonController::class, 'index'])->name('people.index');
Route::post('/people',[PersonController::class, 'store'])->name('people.store');
Route::get('/people/{people}',[PersonController::class, 'show'])->name('people.show');
Route::put('/people/{people}',[PersonController::class, 'update'])->name('people.update');
Route::delete('/people/{people}',[PersonController::class, 'destroy'])->name('people.destroy');
//end::People Routes

//begin::Books Routes
//Route::resource('books', BookController::class);
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::post('/books',[BookController::class, 'store'])->name('books.create');
Route::post('/books',[BookController::class, 'store'])->name('books.store');
Route::get('/books/{books}',[BookController::class, 'show'])->name('books.show');
Route::put('/books/{books}',[BookController::class, 'update'])->name('books.update');
Route::delete('/books/{books}',[BookController::class, 'destroy'])->name('books.destroy');
//end::Books Routes

//begin::Loan Routes
//Route::resource('loan', LoanController::class);
Route::get('/loan', [LoanController::class, 'index'])->name('loan.index');
Route::post('/loan',[LoanController::class, 'store'])->name('loan.store');
Route::get('/loan/{loan}',[LoanController::class, 'show'])->name('loan.show');
Route::put('/loan/{loan}',[LoanController::class, 'update'])->name('loan.update');
Route::delete('/loan/{loan}',[LoanController::class, 'destroy'])->name('loan.destroy');
//end::Loan Routes

