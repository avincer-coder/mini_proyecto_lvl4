<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\MatriculaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('docentes', DocenteController::class);
Route::resource('alumnos', AlumnoController::class);
Route::resource('cursos', CursoController::class);
Route::resource('matriculas', MatriculaController::class);
Route::resource('asistencias', AsistenciaController::class);


// Route::get('/docentes', [DocenteController::class,'index']);
// Route::get('/docentes/{docente}', [DocenteController::class,'show']);

// // Rutas para mostrar la lista y el formulario de creación
// Route::get('/docentes', [DocenteController::class, 'index']);
// Route::get('/docentes/create', [DocenteController::class, 'create']);

// // Rutas para procesar el formulario de creación y mostrar detalles
// Route::post('/docentes', [DocenteController::class, 'store']);
// Route::get('/docentes/{docente}', [DocenteController::class, 'show']);

// // Rutas para el formulario de edición y procesamiento de actualización
// Route::get('/docentes/{docente}/edit', [DocenteController::class, 'edit']);
// Route::put('/docentes/{docente}', [DocenteController::class, 'update']);

// // Ruta para eliminar un docente
// Route::delete('/docentes/{docente}', [DocenteController::class, 'destroy']); 