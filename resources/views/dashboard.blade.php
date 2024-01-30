@extends('layout')

@section('title')
    Dashboard
@endsection

@section('content')
    @if (Auth::user()->role)
        <h1>hello</h1>
    @else
        <h1>byee</h1>
    @endif
@endsection
