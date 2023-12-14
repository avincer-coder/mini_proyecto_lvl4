<?php

namespace App\Http\Controllers;

use App\Models\docente;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function index(): JsonResponse
    {
        $docentes = Docente::all();
        return response()->json(['docentes' => $docentes]);
    }

    // Mostrar un docente específico 
    public function show(Docente $docente): JsonResponse
    {
        return response()->json(['docente' => $docente]);
    }

    // Editar un docente específico
    public function edit(Docente $docente)
    {
        // El parámetro $docente será automáticamente resuelto por Laravel en base al ID proporcionado en la URL
        return response()->json(['docente' => $docente]);
    }

    // Almacenar un nuevo docente
    public function store(Request $request): JsonResponse
    {
        $docente = Docente::create($request->all());
        return response()->json(['docente' => $docente], 201); // 201 significa "Created"
    }

    // Actualizar un docente existente
    public function update(Request $request, Docente $docente): JsonResponse
    {
        try {
            $docente->update($request->all());
            return response()->json(['docente' => $docente]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al actualizar el docente', 'message' => $e->getMessage()], 500);
        }
    }

    // Eliminar un docente
    public function destroy(Docente $docente): JsonResponse
    {
        $docente->delete();
        return response()->json(null, 204); // 204 significa "No Content"
    } 
}
