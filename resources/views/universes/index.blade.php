@extends('layouts.app')

@section('content')
    <h1>Universes</h1>
    <a href="{{ route('universes.create') }}">Create New Universe</a>
    <ul>
        @foreach($universes as $universe)
            <li>
                {{ $universe->name }} - <a href="{{ route('universes.show', $universe->id) }}">View</a> - 
                <a href="{{ route('universes.edit', $universe->id) }}">Edit</a> - 
                <form action="{{ route('universes.destroy', $universe->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
