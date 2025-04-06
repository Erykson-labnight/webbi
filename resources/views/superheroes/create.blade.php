@extends('layouts.app')

@section('content')
    <h1>Create Superhero</h1>

    <form method="POST" action="{{ route('superheroes.store') }}">
        @csrf
        <label for="hero_name">Hero Name:</label>
        <input type="text" name="hero_name" id="hero_name" required>

        <label for="real_name">Real Name:</label>
        <input type="text" name="real_name" id="real_name" required>

        <label for="gender_id">Gender:</label>
        <select name="gender_id" id="gender_id" required>
            @foreach ($genders as $gender)
                <option value="{{ $gender->id }}">{{ $gender->name }}</option>
            @endforeach
        </select>

        <label for="universe_id">Universe:</label>
        <select name="universe_id" id="universe_id" required>
            @foreach ($universes as $universe)
                <option value="{{ $universe->id }}">{{ $universe->name }}</option>
            @endforeach
        </select>

        <label for="description">Description:</label>
        <textarea name="description" id="description"></textarea>

        <label for="image_path">Image URL:</label>
        <input type="text" name="image_path" id="image_path">

        <button type="submit">Create Superhero</button>
    </form>
@endsection
