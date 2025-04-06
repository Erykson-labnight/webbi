@extends('layouts.app')

@section('content')
    <h1>Create Gender</h1>
    <form action="{{ route('genders.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Create Gender</button>
    </form>
@endsection
