<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CabinLevel;

class CabinLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cabinLevels = CabinLevel::all();
        return response()->json($cabinLevels);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // No es necesario implementar esta función para el CRUD básico
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:50|unique:cabin_levels',
            'description' => 'nullable|string',
            'color' => 'nullable|string|max:60',
        ]);

        $cabinLevel = CabinLevel::create($validatedData);
        return response()->json($cabinLevel, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cabinLevel = CabinLevel::findOrFail($id);
        return response()->json($cabinLevel);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // No es necesario implementar esta función para el CRUD básico
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cabinLevel = CabinLevel::findOrFail($id);
        $validatedData = $request->validate([
            'name' => 'required|string|max:50|unique:cabin_levels,name,' . $cabinLevel->id,
            'description' => 'nullable|string',
            'color' => 'nullable|string|max:60',
        ]);

        $cabinLevel->update($validatedData);
        return response()->json($cabinLevel);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cabinLevel = CabinLevel::findOrFail($id);
        $cabinLevel->delete();
        return response()->json(null, 204);
    }
}
