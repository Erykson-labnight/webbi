@extends('layouts.app')

@section('content')
    <h1>Create Superhero</h1>
    <form action="{{ route('superheroes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="hero_name">Hero Name</label>
            <input type="text" name="hero_name" id="hero_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="real_name">Real Name</label>
            <input type="text" name="real_name" id="real_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="gender_id">Gender</label>
            <select name="gender_id" id="gender_id" class="form-control" required>
                @foreach ($genders as $gender)
                    <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="universe_id">Universe</label>
            <select name="universe_id" id="universe_id" class="form-control" required>
                @foreach ($universes as $universe)
                    <option value="{{ $universe->id }}">{{ $universe->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create Superhero</button>
    </form>
@endsection
