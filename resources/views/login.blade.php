@extends('layout')

@section('title')
    LogIn
@endsection

@section('content')
    <section class="login-body">
        <a href="{{route('welcome')}}" class="back">
            <i class="fa-solid fa-arrow-left"></i>
        </a>

        <div class="login-page">
            <div class="left">
                <img src="{{asset('assets/light-logo.png')}}" alt="logo">
                <h2>Welcome <br> Back!</h2>
            </div>
            <div class="right">
                <h4 class="title">LogIn</h4>
                <p>Welcome back! Please login to your account.</p>
                <form action="#" method="post">
                    @csrf
                    <label for="email">
                        <h4>Email</h4>
                        <input type="email" name="email" id="email" placeholder="example@gmail.com" required>
                    </label>
                    <label for="password">
                        <h4>Password</h4>
                        <input type="password" name="password" id="password" placeholder="Enter Password" required>
                    </label>
                    <div class="btns">
                        <button type="reset">Cancel</button>
                        <button type="submit" name="sendF">Submit</button>
                    </div>
                </form>
                <p class="sign">Don't Have an account? <a href="#">SignUp</a></p>
            </div>
        </div>
    </section>
@endsection

@section('script')
        <script>
        const emailRegex = /^[a-zA-Z0-9.-_]+@[a-zA-Z]+\.[a-z]{2,}$/;
        const passwordRegex = /^[A-Za-z\d]{8,}$/;

        const form = document.querySelector('form');

        form.addEventListener('submit', function(event) {
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');

            if (!emailRegex.test(emailInput.value)) {
                alert('Invalid email format');
                event.preventDefault();
            }

            if (!passwordRegex.test(passwordInput.value)) {
                alert('Password must be at least 8 characters');
                event.preventDefault();
            }
        });
    </script>

@endsection