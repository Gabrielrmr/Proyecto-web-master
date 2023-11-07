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

Route::post('Login', [UserController::class, 'login'])->name('session');

Route::get('Registro', [UserController::class, 'pagRegis'])->name('pagRegis');

Route::post('/Registro', [UserController::class, 'registro'])->name('registro');

Route::get('Juegos', [UserController::class, 'show'])->name('juegos')->middleware('auth');

Route::get('Iniciar sesion', [UserController::class, 'session'])->name('login')->middleware('guest');

Route::get('infoGames/{item}', [UserController::class, 'infoGames'])->name('infoGames')->middleware('auth');

Route::get('eliminando/{juegos}', [UserController::class, 'destroy'])->name('destroy')->middleware('auth');

Route::get('Registrar Juegos', [UserController::class, 'regisGames'])->name('regisGames')->middleware('auth');

Route::get("Actualizar Registro/{user}/edit", [UserController::class, "edit"])->name("actualizar")->middleware('auth');

Route::put("Actualizar Registro/{user}/edit", [UserController::class, "update"])->name("update");

Route::get("Cerrando Sesion", [UserController::class, "logout"])->name("logout");

Route::resource('Pagina|Principal',UserController::class);
