@extends('layout')

@section('title')
    Profile
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
                <a href="{{route('services.create')}}">Add</a>
                @if (Auth::user()->role)
                    <a href="{{route('profile')}}">Profile</a>
                @endif
                <a href="{{ route('logout') }}">LogOut</a>
            </nav>
        </header>
        <article id="services">
            <h2>All Services</h2>
            <div class="cards">
                @foreach ($services as $service)
                    <div class="card">
                        <div class="main-content">
                            <div class="header">
                                <span>Service on</span>
                                <span>{{ \Carbon\Carbon::parse($service->created_at)->format('d-F-Y') }}</span>
                            </div>
                            <p class="heading">{{$service->title}}</p>
                            <h4 class="category">{{$service->category->name}}</h4>
                            <p>{{$service->description}}</p>
                        </div>
                        <div class="footer">
                            <p>${{$service->price}}</p>
                            <div class="actions">
                                <a href="{{ route('services.edit', $service) }}">Modify</a>
                                <a href="{{ route('services.destroy', $service) }}">Delete</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </article>
    </section>
@endsection
