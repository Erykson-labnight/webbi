@extends('layouts.app')

@section('content')
    <h1>Create Universe</h1>

    <form method="POST" action="{{ route('universes.store') }}">
        @csrf
        <label for="name">Universe Name:</label>
        <input type="text" name="name" id="name" required>
        <button type="submit">Create Universe</button>
    </form>
@endsection
