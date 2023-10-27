<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivrosController;

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

Route::prefix('/livros')
  ->whereNumber('id')
  ->controller(LivrosController::class)
  ->name('livros.')
  ->group(function() {
    Route::post('/', 'store')
      ->name('store');

    Route::get('/', 'index')
    ->name('index');

    Route::get('/{id}', 'show')
      ->name('show');

    Route::put('/{id}', 'update')
      ->name('update');

    Route::delete('/{id}', 'destroy')
      ->name('destroy');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
