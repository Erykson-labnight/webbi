@extends('layouts.app')

@section('content')
    <h1>{{ $gender->name }}</h1>
    <p>Created at: {{ $gender->created_at }}</p>
    <p>Updated at: {{ $gender->updated_at }}</p>
@endsection
