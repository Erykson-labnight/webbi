@extends('layouts.app')

@section('content')
    <h1>Edit Gender</h1>
    <form action="{{ route('genders.update', $gender->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $gender->name }}" required>
        <button type="submit">Update Gender</button>
    </form>
@endsection
