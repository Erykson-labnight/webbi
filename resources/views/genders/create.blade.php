@extends('layouts.app')

@section('content')
    <h1>Create Gender</h1>

    <form method="POST" action="{{ route('genders.store') }}">
        @csrf
        <label for="name">Gender Name:</label>
        <input type="text" name="name" id="name" required>
        <button type="submit">Create Gender</button>
    </form>
@endsection
