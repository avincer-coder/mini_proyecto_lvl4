<?php

namespace App\Http\Controllers;

use App\Models\curso;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(): JsonResponse
    {
        $curso = curso::all();
        return response()->json(['curso' => $curso]);
    }

    // Mostrar un docente específico 
    public function show(curso $curso): JsonResponse
    {
        return response()->json(['curso' => $curso]);
    }

    // Editar un docente específico
    public function edit(curso $curso)
    {
        // El parámetro $docente será automáticamente resuelto por Laravel en base al ID proporcionado en la URL
        return response()->json(['curso' => $curso]);
    }

    // Almacenar un nuevo docente
    public function store(Request $request): JsonResponse
    {
        $curso = curso::create($request->all());
        return response()->json(['curso' => $curso], 201); // 201 significa "Created"
    }

    // Actualizar un docente existente
    public function update(Request $request, curso $curso): JsonResponse
    {
        try {
            $curso->update($request->all());
            return response()->json(['curso' => $curso]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al actualizar el docente', 'message' => $e->getMessage()], 500);
        }
    }

    // Eliminar un docente
    public function destroy(curso $curso): JsonResponse
    {
        $curso->delete();
        return response()->json(null, 204); // 204 significa "No Content"
    }
}
