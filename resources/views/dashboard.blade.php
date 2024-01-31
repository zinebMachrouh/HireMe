@extends('layout')

@section('title')
    Dashboard
@endsection

@section('content')
    <section id="dash">
        <header>
            <h2>
                <img src="{{ asset('assets/logo.png') }}" alt="logo">
                HireMe
            </h2>
            <nav>
                <a href="#">Home</a>
                <a href="#">Add</a>
                @if (Auth::user()->role)
                    <a href="">Profile</a>
                @endif
                <a href="{{ route('logout') }}">LogOut</a>
            </nav>
        </header>
        <article>
            @foreach ($services as $service)
                <h4>{{ $service->title }}</h4>
            @endforeach
        </article>
    </section>
@endsection
