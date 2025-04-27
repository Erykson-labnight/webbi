<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Gender;
use Illuminate\Http\Request;

class GenderController extends Controller
{
    // Mostrar todos los géneros
    public function index()
    {
        return response()->json(Gender::all());
    }

    // Mostrar un género específico
    public function show(Gender $gender)
    {
        return response()->json($gender);
    }

    // Crear un nuevo género
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:genders',
        ]);

        $gender = Gender::create($request->all());

        return response()->json($gender, 201);  
    }

    // Actualizar un género específico
    public function update(Request $request, Gender $gender)
    {
        $request->validate([
            'name' => 'required|unique:genders,name,' . $gender->id,
        ]);

        $gender->update($request->all());

        return response()->json($gender);
    }

    // Eliminar un género específico
    public function destroy(Gender $gender)
    {
        $gender->delete();

        return response()->json(['message' => 'Gender deleted successfully']);
    }
}
