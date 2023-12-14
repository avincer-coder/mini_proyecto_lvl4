<?php

namespace App\Http\Controllers;

use App\Models\matricula;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    public function index(): JsonResponse
    {
        $matricula = matricula::all();
        return response()->json(['matricula' => $matricula]);
    }

    // Mostrar un docente específico 
    public function show(matricula $matricula): JsonResponse
    {
        return response()->json(['matricula' => $matricula]);
    }

    // Editar un docente específico
    public function edit(matricula $matricula)
    {
        // El parámetro $docente será automáticamente resuelto por Laravel en base al ID proporcionado en la URL
        return response()->json(['matricula' => $matricula]);
    }

    // Almacenar un nuevo docente
    public function store(Request $request): JsonResponse
    {
        $matricula = matricula::create($request->all());
        return response()->json(['matricula' => $matricula], 201); // 201 significa "Created"
    }

    // Actualizar un docente existente
    public function update(Request $request, matricula $matricula): JsonResponse
    {
        try {
            $matricula->update($request->all());
            return response()->json(['matricula' => $matricula]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al actualizar el docente', 'message' => $e->getMessage()], 500);
        }
    }

    // Eliminar un docente
    public function destroy(matricula $matricula): JsonResponse
    {
        $matricula->delete();
        return response()->json(null, 204); // 204 significa "No Content"
    } 
}
