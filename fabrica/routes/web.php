<?php

use App\Http\Controllers\CarroController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//show
Route::get('/carroshow/{id}', [CarroController::class, 'show'])->name('carros.show');

//criar
Route::post('/add-carro', [CarroController::class, 'store'])->name('carros.add');
//read
Route::get('/carro', [CarroController::class, 'index'])->name('carros.index');

//editar
Route::get('/carro/{id}', [CarroController::class, 'edit'])->name('carros.edit');
//update
Route::patch('/carroupdate/{id}', [CarroController::class, 'update'])->name('carros.update');
//delete
Route::delete('carro/{id}',[CarroController::class, 'destroy'] )->name('carros.destroy');

require __DIR__.'/auth.php';
