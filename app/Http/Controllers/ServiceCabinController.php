<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceCabin;
class ServiceCabinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $serviceCabins = ServiceCabin::all();
        return response()->json($serviceCabins);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_cabin' => 'required|exists:cabins,id',
            'id_service' => 'required|exists:services,id_service',
            'name' => 'required|string|max:40',
        ]);

        $serviceCabin = ServiceCabin::create($validatedData);


        return response()->json([
            'mensaje' => 'ServiceCabin creado exitosamente',
            'data' => $serviceCabin
        ], 201);
    }

    public function show($id)
    {
        $serviceCabin = ServiceCabin::findOrFail($id);
        return response()->json([
            'mensaje' => 'ServiceCabin encontrado',
            'data' => $serviceCabin
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $serviceCabin = ServiceCabin::findOrFail($id);

        $validatedData = $request->validate([
            'id_cabin' => 'sometimes|required|exists:cabins,id',
            'id_service' => 'sometimes|required|exists:services,id_service',
            'name' => 'sometimes|required|string|max:40',
        ]);

        $serviceCabin->update($validatedData);

        return response()->json([
            'mensaje' => 'ServiceCabin actualizado exitosamente',
            'data' => $serviceCabin
        ], 200);
    }

    public function destroy($id)
    {
        $serviceCabin = ServiceCabin::findOrFail($id);
        $serviceCabin->delete();
        return response()->json(null, 204);
    }

}
