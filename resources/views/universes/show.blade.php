@extends('layouts.app')

@section('content')
    <h1>{{ $universe->name }}</h1>
    <p>Created at: {{ $universe->created_at }}</p>
    <p>Updated at: {{ $universe->updated_at }}</p>
@endsection
