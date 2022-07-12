<?php

use App\Http\Controllers\CarroController;
use App\Http\Controllers\CorController;
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
Route::post('/add-carro', [CarroController::class, 'store'])->name('carros.add')->middleware('auth');
Route::post('/add-cor', [CorController::class, 'store'])->name('cor.add')->middleware('auth');
//read
Route::get('/carro', [CarroController::class, 'index'])->name('carros.index');
Route::get('/cores', [CorController::class, 'index'])->name('cores.index');

//editar
Route::get('/carro/{id}', [CarroController::class, 'edit'])->name('carros.edit');
Route::get('/cor/{id}', [CorController::class, 'edit'])->name('cor.edit');
//update
Route::patch('/carroupdate/{id}', [CarroController::class, 'update'])->name('carros.update');
Route::patch('/corupdate/{id}', [CorController::class, 'update'])->name('cor.update');
//delete
Route::delete('carro/{id}',[CarroController::class, 'destroy'] )->name('carros.destroy');
Route::delete('cor/{id}',[CorController::class, 'destroy'] )->name('cor.destroy');

require __DIR__.'/auth.php';
