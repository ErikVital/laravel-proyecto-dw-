<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeUserController;
use App\Http\Controllers\WelcomeMenuController;
use App\Http\Controllers\PostController;
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

Route::get('/', [WelcomeUserController::class, "welcome"]);


Route::get('/miruta', [WelcomeUserController::class, "miruta"]);

Route::get('/usuarios', [UserController::class,"index"]);


Route::get('/usuarios/{id}', [UserController::class, "show"])
->where('id', '\d+');

Route::get('/usuarios/nuevo', [UserController::class, "create"]);

Route::get('/saludo/{nombre}/{apodo?}', [WelcomeUserController::class, "index"]);

Route::get('/inicio', [WelcomeMenuController::class, "index"])->name("index");

Route::get('/shop', [WelcomeMenuController::class, "shopping"]);

Route::get('/nosotros', [WelcomeMenuController::class, "nosotros"])->name("nosotros");  

Route::get('/servicios', [WelcomeMenuController::class, "servicios"])->name("servicios");

Route::get('/lugares', [WelcomeMenuController::class, "lugares"])->name("lugares");

Route::get('/contacto', [WelcomeMenuController::class, "contacto"])->name("contacto");

Route::get('/dbtest', [WelcomeMenuController::class, "dbtest"])->name("dbtest");

Route::get('/cocina', [WelcomeMenuController::class, "cocina"])->name("cocina");

Route::get('/formulario', [WelcomeMenuController::class, "formulario"]);