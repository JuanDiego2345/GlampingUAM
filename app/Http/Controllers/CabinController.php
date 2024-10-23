<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cabin;

class CabinController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cabin = Cabin::orderBy('id', 'asc')->get();
        return response()->json(['data' => $cabin], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:50',
            'capacity' => 'required|integer|min:1',
            'cabinLevel_id' => 'required|integer|min:0',
        ]);

        $cabin = Cabin::create($validatedData);
        return response()->json(['data' => $cabin], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cabin $cabin)
    {
        return response()->json(['data' => $cabin], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cabin $cabin)
    {
        // Validar los datos de entrada
        $validatedData = $request->validate([
            'name' => 'required|string|max:50',
            'capacity' => 'required|integer|min:1',
            'cabinLevel_id' => 'required|integer|min:0',
        ]);  

        // Actualizar la cabaña con los datos validados
        $cabin->update($validatedData);
        
        return response()->json(['data' => $cabin], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cabin $cabin)
    {
        $cabin->delete();
        return response()->json(null, 204);
    }
}
