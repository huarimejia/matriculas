<?php

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
    return redirect('/estudiante');
});

Route::get('/estudiante', 'App\Http\Controllers\EstudianteControlador@crearEstudiante')->name('estudiante.agregar');
Route::post('/estudiante', 'App\Http\Controllers\EstudianteControlador@registrarEstudiante')->name('estudiante.guardar');
Route::get('/estudiante/listar', 'App\Http\Controllers\EstudianteControlador@listarEstudiantes')->name('estudiante.listar');
Route::get('/estudiante/editar/{estudiante}', 'App\Http\Controllers\EstudianteControlador@formularioEditarEstudiante')->name('estudiante.editar');
Route::patch('/estudiante/editar/{estudiante}', 'App\Http\Controllers\EstudianteControlador@ActualizarEstudiante')->name('estudiante.actualizar');
Route::get('/estudiante/{estudiante}', 'App\Http\Controllers\EstudianteControlador@VerEstudiante')->name('estudiante.ver');
Route::delete('/estudiante/{estudiante}', 'App\Http\Controllers\EstudianteControlador@EliminarEstudiante')->name('estudiante.eliminar');















