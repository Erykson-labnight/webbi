@extends('layouts.app')

@section('content')
    <h1>{{ $superhero->hero_name }}</h1>
    <p>Real Name: {{ $superhero->real_name }}</p>
    <p>Gender: {{ $superhero->gender->name }}</p>
    <p>Universe: {{ $superhero->universe->name }}</p>
    <p>Description: {{ $superhero->description }}</p>
    <img src="{{ $superhero->image_path }}" alt="Image of {{ $superhero->hero_name }}">
    <p>Created at: {{ $superhero->created_at }}</p>
    <p>Updated at: {{ $superhero->updated_at }}</p>
@endsection
