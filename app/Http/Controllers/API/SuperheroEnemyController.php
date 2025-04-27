<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;  // Asegúrate de importar la clase Controller
use App\Models\Enemy;  // Tu modelo correspondiente
use Illuminate\Http\Request;

class SuperheroEnemyController extends Controller
{
    // Mostrar todos los enemigos de superhéroes
    public function index()
    {
        return response()->json(Enemy::all());
    }

    // Crear un nuevo enemigo de superhéroe
    public function store(Request $request)
    {
        $request->validate([
            'enemy_name' => 'required|string',
            'superhero_id' => 'required|exists:superheroes,id',
        ]);

        $enemy = Enemy::create($request->all());

        return response()->json($enemy, 201);  
    }

    // Mostrar un enemigo de superhéroe específico
    public function show(string $id)
    {
        $enemy = Enemy::find($id);

        if (!$enemy) {
            return response()->json(['message' => 'Enemy not found'], 404);
        }

        return response()->json($enemy);
    }

    // Actualizar un enemigo de superhéroe específico
    public function update(Request $request, string $id)
    {
        $enemy = Enemy::find($id);

        if (!$enemy) {
            return response()->json(['message' => 'Enemy not found'], 404);
        }

        $enemy->update($request->all());

        return response()->json($enemy);
    }

    // Eliminar un enemigo de superhéroe específico
    public function destroy(string $id)
    {
        $enemy = Enemy::find($id);

        if (!$enemy) {
            return response()->json(['message' => 'Enemy not found'], 404);
        }

        $enemy->delete();

        return response()->json(['message' => 'Enemy deleted successfully']);
    }
}
