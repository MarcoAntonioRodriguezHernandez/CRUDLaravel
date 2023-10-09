<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::get('/authors', [AuthorsController::class, 'index'])->name('authors.index');
Route::post('/authors',[AuthorsController::class, 'store'])->name('authors.store');
Route::get('/authors/{authors}',[AuthorsController::class, 'show'])->name('authors.show');
Route::put('/authors/{authors}',[AuthorsController::class, 'update'])->name('authors.update');
Route::delete('/authors/{authors}',[AuthorsController::class, 'destroy'])->name('authors.destroy');
//Route::get('/authors', 'App\Http\Controllers\AuthorsController@index');
//Route::post('/authors', 'App\Http\Controllers\AuthorsController@store');
//Route::get('/authors/{authors}', 'App\Http\Controllers\AuthorsController@show');
//Route::put('/authors/{authors}', 'App\Http\Controllers\AuthorsController@update');
//Route::delete('/authors/{authors}', 'App\Http\Controllers\AuthorsController@destroy');
