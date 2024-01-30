@extends('layout')

@section('title')
    Welcome
@endsection

@section('content')
    <article>
        <header>
            <h2><img src="{{ asset('assets/logo.png') }}" alt="logo">HireMe</h2>
            <nav>
                <a href="#">Home</a>
                <a href="#">Dashboard</a>
                <a href="#">Blog</a>
                <a href="#">About</a>
                <a href="#">Contact</a>
                <a href="#">LogIn</a>
            </nav>
        </header>
        <main id="hero-section">
            <div class="left-hero">
                <h1>Welcome to HireMe – Your Trusted Partner for Premium Services!</h1>
                <p>At HireMe, we pride ourselves on delivering top-notch services tailored to meet your unique needs.
                    Whether you're a business looking for professional solutions or an individual seeking personalized
                    services, we've got you covered</p>
                <div class="botonat">
                    <a href="#">Explore Now</a>
                    <a href="#">Contact Us</a>
                </div>
                <div class="mini-cards">
                    <div class="mini-card">
                        <h4>+50</h4>
                        <span>Services</span>
                    </div>
                    <div class="mini-card">
                        <h4>+2000</h4>
                        <span>Customers</span>
                    </div>
                    <div class="mini-card">
                        <h4>+10</h4>
                        <span>Cities</span>
                    </div>
                </div>
            </div>
            <div class="right-hero">
                <img src="{{ asset('assets/right1.jpeg') }}" alt="">
            </div>
        </main>

    </article>
@endsection
