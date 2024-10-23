<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::orderBy('id', 'asc')->get();
        return response()->json(['data' => $user], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     $user = User::create($request->all());
    //     return response()->json(['data' => $user], 201);
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create($validatedData);
        return response()->json(['data' => $user], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return response()->json(['data' => $user], 200);
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(User $user)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|email|unique:users,email,' . $user->id,
        //     'password' => 'required|string|min:8',
        // ]);

        // $user = User::findOrFail($user);

        // $user->name = $validatedData['name'];
        // $user->email = $validatedData['email'];

        // if($request -> filled('password')){
        //     $user -> password = hash::make($validatedData['password']);
        // }

        $user->update($request -> all());
        return response()->json(['data' => $user], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(null, 204);
    }

    // public function destroyAll(User $user){

    //     //ELimina todos los usuarios y reinicia los ID's
    //     // User::truncate();

    //     //ELimina todos los usuarios pero no reinicia los ID's
    //     User::query() -> delete();
    //     return reponse() -> json(['message' => 'Todos los usuarios han sido eliminados satisfactoriamente'], 204);
    // }
}
