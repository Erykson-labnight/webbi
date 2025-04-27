<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Universe;
use Illuminate\Http\Request;

class UniverseController extends Controller
{
    // Mostrar todos los universos
    public function index()
    {
        return response()->json(Universe::all());
    }

    // Mostrar un universo específico
    public function show(Universe $universe)
    {
        return response()->json($universe);
    }

    // Crear un nuevo universo
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:universes',
        ]);

        $universe = Universe::create($request->all());

        return response()->json($universe, 201); 
    }

    // Actualizar un universo específico
    public function update(Request $request, Universe $universe)
    {
        $request->validate([
            'name' => 'required|unique:universes,name,' . $universe->id,
        ]);

        $universe->update($request->all());

        return response()->json($universe);
    }

    // Eliminar un universo específico
    public function destroy(Universe $universe)
    {
        $universe->delete();

        return response()->json(['message' => 'Universe deleted successfully']);
    }
}
