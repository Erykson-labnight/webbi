@extends('layouts.app')

@section('content')
    <h1>Edit Superhero</h1>
    <form action="{{ route('superheroes.update', $superhero->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="hero_name">Hero Name</label>
            <input type="text" name="hero_name" id="hero_name" class="form-control" value="{{ old('hero_name', $superhero->hero_name) }}" required>
        </div>

        <div class="form-group">
            <label for="real_name">Real Name</label>
            <input type="text" name="real_name" id="real_name" class="form-control" value="{{ old('real_name', $superhero->real_name) }}" required>
        </div>

        <div class="form-group">
            <label for="gender_id">Gender</label>
            <select name="gender_id" id="gender_id" class="form-control" required>
                @foreach ($genders as $gender)
                    <option value="{{ $gender->id }}" {{ $gender->id == $superhero->gender_id ? 'selected' : '' }}>
                        {{ $gender->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="universe_id">Universe</label>
            <select name="universe_id" id="universe_id" class="form-control" required>
                @foreach ($universes as $universe)
                    <option value="{{ $universe->id }}" {{ $universe->id == $superhero->universe_id ? 'selected' : '' }}>
                        {{ $universe->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control">{{ old('description', $superhero->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="image_path">Image URL</label>
            <input type="text" name="image_path" id="image_path" class="form-control" value="{{ old('image_path', $superhero->image_path) }}">
        </div>

        <button type="submit" class="btn btn-primary">Update Superhero</button>
    </form>
@endsection
