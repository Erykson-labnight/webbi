@extends('layouts.app')

@section('content')
    <h1>Superheroes</h1>
    <a href="{{ route('superheroes.create') }}" class="btn btn-primary">Create New Superhero</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Hero Name</th>
                <th>Real Name</th>
                <th>Gender</th>
                <th>Universe</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($superheroes as $superhero)
                <tr>
                    <td>{{ $superhero->hero_name }}</td>
                    <td>{{ $superhero->real_name }}</td>
                    <td>{{ $superhero->gender->name }}</td>
                    <td>{{ $superhero->universe->name }}</td>
                    <td>
                        <a href="{{ route('superheroes.edit', $superhero->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('superheroes.destroy', $superhero->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
