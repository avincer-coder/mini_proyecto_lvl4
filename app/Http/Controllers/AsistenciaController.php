<?php

namespace App\Http\Controllers;

use App\Models\asistencia;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    public function index(): JsonResponse
    {
        $asistencia = asistencia::all();
        return response()->json(['asistencia' => $asistencia]);
    }

    // Mostrar un docente específico 
    public function show(asistencia $asistencia): JsonResponse
    {
        return response()->json(['asistencia' => $asistencia]);
    }

    // Editar un docente específico
    public function edit(asistencia $asistencia)
    {
        // El parámetro $docente será automáticamente resuelto por Laravel en base al ID proporcionado en la URL
        return response()->json(['asistencia' => $asistencia]);
    }

    // Almacenar un nuevo docente
    public function store(Request $request): JsonResponse
    {
        $asistencia = asistencia::create($request->all());
        return response()->json(['curso' => $asistencia], 201); // 201 significa "Created"
    }

    // Actualizar un docente existente
    public function update(Request $request, asistencia $asistencia): JsonResponse
    {
        try {
            $asistencia->update($request->all());
            return response()->json(['asistencia' => $asistencia]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al actualizar el docente', 'message' => $e->getMessage()], 500);
        }
    }

    // Eliminar un docente
    public function destroy(asistencia $asistencia): JsonResponse
    {
        $asistencia->delete();
        return response()->json(null, 204); // 204 significa "No Content"
    }
}
