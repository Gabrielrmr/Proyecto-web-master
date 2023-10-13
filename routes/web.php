<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [UserController::class, 'animation']);

Route::post('/Login', [UserController::class, 'login'])->name('login');

Route::get('/Registro', [UserController::class, 'pagRegis'])->name('pagRegis');
Route::post('/Registro', [UserController::class, 'registro'])->name('registro');

Route::resource('/Pagina|Principal',UserController::class);
