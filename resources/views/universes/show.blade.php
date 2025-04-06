@extends('layouts.app')

@section('content')
    <h1>{{ $universe->name }}</h1>
    <p>Here you can view all details of the universe.</p>
    <a href="{{ route('universes.edit', $universe->id) }}">Edit Universe</a>
    <form action="{{ route('universes.destroy', $universe->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Universe</button>
    </form>
@endsection
