@extends('layouts.app')

@section('content')
    <h1>Edit Universe</h1>
    <form action="{{ route('universes.update', $universe->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $universe->name }}" required>
        <button type="submit">Update Universe</button>
    </form>
@endsection
