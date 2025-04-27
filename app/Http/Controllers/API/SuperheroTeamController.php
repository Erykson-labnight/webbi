<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class SuperheroTeamController extends Controller
{
    // Mostrar todos los equipos de superhéroes
    public function index()
    {
        return response()->json(Team::all());
    }

    // Crear un nuevo equipo de superhéroes
    public function store(Request $request)
    {
        $request->validate([
            'team_name' => 'required|string',
            'description' => 'nullable|string',
        ]);

        $team = Team::create($request->all());

        return response()->json($team, 201);  
    }

    // Mostrar un equipo de superhéroes específico
    public function show(string $id)
    {
        $team = Team::find($id);

        if (!$team) {
            return response()->json(['message' => 'Team not found'], 404);
        }

        return response()->json($team);
    }

    // Actualizar un equipo de superhéroes específico
    public function update(Request $request, string $id)
    {
        $team = Team::find($id);

        if (!$team) {
            return response()->json(['message' => 'Team not found'], 404);
        }

        $team->update($request->all());

        return response()->json($team);
    }

    // Eliminar un equipo de superhéroes específico
    public function destroy(string $id)
    {
        $team = Team::find($id);

        if (!$team) {
            return response()->json(['message' => 'Team not found'], 404);
        }

        $team->delete();

        return response()->json(['message' => 'Team deleted successfully']);
    }
}
