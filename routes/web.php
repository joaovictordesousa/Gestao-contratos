<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;

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
Route::get('/', [PrincipalController::class, 'pesquisa'])->name('welcome');
Route::get('/pesquisa', [PrincipalController::class, 'pesquisa'])->name('welcome.pesquisa');
Route::get('/pesquisa/contratos', [PrincipalController::class, 'totalcadastros'])->name('welcome.totalcontratos');
Route::get('/home', [PrincipalController::class, 'index'])->name('welcome.home');
Route::match(['get', 'post'], '/home/result', [PrincipalController::class, 'resultado'])->name('welcome.resultado');
Route::get('/home/create', [PrincipalController::class, 'create'])->name('welcome.create');
Route::post('/home', [PrincipalController::class, 'store'])->name('welcome.store');
Route::delete('/welcome/{resultado}', [PrincipalController::class, 'destroy'])->name('welcome.destroy');