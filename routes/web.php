<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

Route::get('/', HomeController::class);

Route::get('cursos', [CursoController::class,'index'])->name('index');
Route::get('cursos/create', [CursoController::class,'create'])->name('crear');

Route::post('cursos', [CursoController::class,'nuevo'])->name('nuevo');/* esta ruta es para crear un nuevo curso
esta por el metodo post para que no se vea lo que se le pasa por la url */

Route::get('cursos/{curso}', [CursoController::class,'show'])->name('show');

Route::get('cursos/{curso}/editar', [CursoController::class,'editar'])->name('editar');

Route::put('cursos/{curso}',[CursoController::class, 'modificar'])->name('modificar');

