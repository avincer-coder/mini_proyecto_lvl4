<?php

namespace App\Http\Controllers;

use App\Models\alumno;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index(): JsonResponse
    {
        $alumno = alumno::all();
        return response()->json(['alumno' => $alumno]);
    }

    // Mostrar un docente específico 
    public function show(alumno $alumno): JsonResponse
    {
        return response()->json(['alumno' => $alumno]);
    }

    // Editar un docente específico
    public function edit(alumno $alumno)
    {
        // El parámetro $docente será automáticamente resuelto por Laravel en base al ID proporcionado en la URL
        return response()->json(['alumno' => $alumno]);
    }

    // Almacenar un nuevo docente
    public function store(Request $request): JsonResponse
    {
        $alumno = alumno::create($request->all());
        return response()->json(['alumno' => $alumno], 201); // 201 significa "Created"
    }

    // Actualizar un docente existente
    public function update(Request $request, alumno $alumno): JsonResponse
    {
        try {
            $alumno->update($request->all());
            return response()->json(['alumno' => $alumno]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al actualizar el docente', 'message' => $e->getMessage()], 500);
        }
    }

    // Eliminar un docente
    public function destroy(alumno $alumno): JsonResponse
    {
        $alumno->delete();
        return response()->json(null, 204); // 204 significa "No Content"
    } 
}
