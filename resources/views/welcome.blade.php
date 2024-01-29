@extends('layout')

@section('title')
    Welcome
@endsection

@section('content')
    <header>
        <h2><img src="{{asset('assets/logo.png')}}" alt="logo">HireMe</h2>
        <nav>
            <a href="#">Home</a>
            <a href="#">Dashboard</a>
            <a href="#">Blog</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
            <a href="#">LogIn</a>
        </nav>
    </header>
@endsection