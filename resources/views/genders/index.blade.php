@extends('layouts.app')

@section('content')
    <h1>All Genders</h1>
    <a href="{{ route('genders.create') }}">Create New Gender</a>
    <ul>
        @foreach ($genders as $gender)
            <li><a href="{{ route('genders.show', $gender) }}">{{ $gender->name }}</a></li>
        @endforeach
    </ul>
@endsection
