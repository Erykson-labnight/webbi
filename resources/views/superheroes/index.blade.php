@extends('layouts.app')

@section('content')
    <h1>All Superheroes</h1>
    <a href="{{ route('superheroes.create') }}">Create New Superhero</a>
    <ul>
        @foreach ($superheroes as $superhero)
            <li><a href="{{ route('superheroes.show', $superhero) }}">{{ $superhero->hero_name }}</a></li>
        @endforeach
    </ul>
@endsection
