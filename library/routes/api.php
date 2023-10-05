<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/authors', 'App\Http\Controllers\AuthorsController@index');
Route::post('/authors', 'App\Http\Controllers\AuthorsController@store');
Route::get('/authors/{authors}', 'App\Http\Controllers\AuthorsController@show');
Route::put('/authors/{authors}', 'App\Http\Controllers\AuthorsController@update');
Route::delete('/authors/{authors}', 'App\Http\Controllers\AuthorsController@destroy');
