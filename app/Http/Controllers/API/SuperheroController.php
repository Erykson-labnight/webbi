<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Superhero;
use App\Models\Gender;
use App\Models\Universe;
use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    // Mostrar todos los superhéroes
    public function index()
    {
        return response()->json(Superhero::all());
    }

    // Mostrar un superhéroe específico
    public function show(Superhero $superhero)
    {
        return response()->json($superhero);
    }

    // Crear un nuevo superhéroe
    public function store(Request $request)
    {
        $request->validate([
            'hero_name' => 'required|string',
            'real_name' => 'required|string',
            'gender_id' => 'required|exists:genders,id',
            'universe_id' => 'required|exists:universes,id',
            'description' => 'nullable|string',
            'image_path' => 'nullable|string',
        ]);

        $superhero = Superhero::create($request->all());

        return response()->json($superhero, 201);  
    }

    // Actualizar un superhéroe específico
    public function update(Request $request, Superhero $superhero)
    {
        $request->validate([
            'hero_name' => 'required|string',
            'real_name' => 'required|string',
            'gender_id' => 'required|exists:genders,id',
            'universe_id' => 'required|exists:universes,id',
            'description' => 'nullable|string',
            'image_path' => 'nullable|string',
        ]);

        $superhero->update($request->all());

        return response()->json($superhero);
    }

    // Eliminar un superhéroe específico
    public function destroy(Superhero $superhero)
    {
        $superhero->delete();

        return response()->json(['message' => 'Superhero deleted successfully']);
    }
}
