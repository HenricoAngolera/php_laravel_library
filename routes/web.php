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


Route::post('/livros', function() {
    
});

Route::get('/livros', function () {
    
});

Route::get('/livros/{id}', [LivrosController::class, 'show']);

Route::put('/livros/{id}', function() {
    
});

Route::delete('/livros/{id}', function() {
    
});

?>