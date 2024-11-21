<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cabin;

class CabinController extends Controller
{


    /**
     * Mostrar una lista de los recursos.
     */
    public function index(Request $request)
    {
        $sort = $request->input('sort', 'name');
        $type = $request->input('type', 'asc');

        $validSort = ["name", "cabinlevel_id", "capacity"];

        if(! in_array($sort, $validSort)){
                $message = "Campo de ordenación no válido: &sort";
                return response()->json(['error' => $message], 400);
        }

        $validType = ['asc', 'desc'];

        if(! in_array($type, $validType)){
            $message = "Tipo de campo no válido: &type";
            
            return response()->json(['error' => $message], 400);
        }

        $cabins = Cabin::orderBy($sort, $type)->get();

        return response()->json(['data' => $cabins], 200);
    }

    /**
     * Almacenar un recurso recién creado en el almacenamiento.
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
     * Mostrar el recurso especificado.
     */
    public function show(Cabin $cabin)
    {
        return response()->json(['data' => $cabin], 200);
    }

    /**
     * Actualizar el recurso especificado en el almacenamiento.
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
     * Eliminar el recurso especificado del almacenamiento.
     */
    public function destroy(Cabin $cabin)
    {
        $cabin->delete();
        return response()->json(null, 204);
    }
}
