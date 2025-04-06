@extends('layouts.app')

@section('content')
    <h1>Genders</h1>
    <a href="{{ route('genders.create') }}">Create New Gender</a>
    <ul>
        @foreach($genders as $gender)
            <li>
                {{ $gender->name }} - <a href="{{ route('genders.show', $gender->id) }}">View</a> - 
                <a href="{{ route('genders.edit', $gender->id) }}">Edit</a> - 
                <form action="{{ route('genders.destroy', $gender->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
