<?php

namespace App\Http\Controllers;

use App\Models\Superhero;
use App\Models\Gender;
use App\Models\Universe;
use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    public function index()
    {
        $superheroes = Superhero::all();
        return view('superheroes.index', compact('superheroes'));
    }

    public function create()
    {
        $genders = Gender::all();
        $universes = Universe::all();
        return view('superheroes.create', compact('genders', 'universes'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'hero_name' => 'required|string|max:255',
            'real_name' => 'required|string|max:255',
            'gender_id' => 'required|exists:genders,id',
            'universe_id' => 'required|exists:universes,id',
            'description' => 'nullable|string',
            'image_path' => 'nullable|string',
        ]);

        Superhero::create($request->all());

        return redirect()->route('superheroes.index');
    }

    public function show(Superhero $superhero)
    {
        return view('superheroes.show', compact('superhero'));
    }
}

