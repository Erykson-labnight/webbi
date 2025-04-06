@extends('layouts.app')

@section('content')
    <h1>Create Universe</h1>
    <form action="{{ route('universes.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Create Universe</button>
    </form>
@endsection
