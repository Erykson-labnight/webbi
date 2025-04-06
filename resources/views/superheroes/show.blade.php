@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $superhero->hero_name }} ({{ $superhero->real_name }})</h1>
        <p><strong>Gender:</strong> {{ $superhero->gender->name }}</p>
        <p><strong>Universe:</strong> {{ $superhero->universe->name }}</p>
        <p><strong>Description:</strong> {{ $superhero->description }}</p>
        <img src="{{ $superhero->image_path }}" alt="{{ $superhero->hero_name }} Image" class="img-fluid">

        <a href="{{ route('superheroes.index') }}" class="btn btn-secondary mt-3">Back to List</a>
    </div>
@endsection
