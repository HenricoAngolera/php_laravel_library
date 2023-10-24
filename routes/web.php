<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LivrosController;

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
  
  Route::put('/{id}', 'edit')
    ->name('edit');
  
  Route::delete('/{id}', 'destroy')
    ->name('destroy');
});


?>