<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserve;

class ReserveController extends Controller
{
    public function index()
    {
        $reserve = Reserve::orderBy('id', 'asc')->get();
        return response()->json(['data' => $reserve], 200);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|integer|min:0',
            'cabin_id' => 'required|integer|min:0',
            'checkIn' => 'required|date',
            'checkOut' => 'required|date',
            'status' => 'required|boolean',
        ]);

        $reserve = Reserve::create($validatedData);
        return response()->json(['data' => $reserve], 201);
    }

    public function show(Reserve $reserve)
    {
        return response()->json(['data' => $reserve], 200);
    }

    public function update(Request $request, Reserve $reserve)
    {
        $validatedData = $request->validate([
            'cabin_id' => 'required|integer|min:0',
            'checkIn' => 'required|date',
            'checkOut' => 'required|date',
            'status' => 'required|boolean',
        ]);

        $reserve->update($validatedData);

        return response()->json(['data' => $reserve], 200);
    }

    public function destroy(Reserve $reserve)
    {
        $reserve->delete();
        return response()->json(null, 204);
    }
}
