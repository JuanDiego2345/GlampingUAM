<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $services = Service::all();

            if ($services->isEmpty()) {
                return response()->json(['mensaje' => 'No se encontraron servicios'], 404);
            }

            return response()->json(['data' => $services], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al obtener los servicios: ' . $e->getMessage()], 500);
        }
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $service = Service::create($validatedData);
        return response()->json(['data' => $service], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id_service)
    {
        // return response()->json(['data' => $service], 200);
        $service = Service::findOrFail($id_service);
        return response()->json(['data' => $service], 200);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $service->update($validatedData);
        return response()->json(['data' => $service], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return response()->json(['mensaje' => 'Servicio eliminado correctamente'], 204);
    }
}
