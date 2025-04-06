@extends('layouts.app')

@section('content')
    <h1>{{ $gender->name }}</h1>
    <p>Here you can view all details of the gender.</p>
    <a href="{{ route('genders.edit', $gender->id) }}">Edit Gender</a>
    <form action="{{ route('genders.destroy', $gender->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Gender</button>
    </form>
@endsection
