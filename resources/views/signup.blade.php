@extends('layout')

@section('title')
    SignUp
@endsection

@section('content')
    <section class="login-body">
        <a href="{{ route('welcome') }}" class="back">
            <i class="fa-solid fa-arrow-left"></i>
        </a>

        <div class="login-page">
            <div class="left">
                <img src="{{ asset('assets/light-logo.png') }}" alt="logo">
                <h2>Let's work <br> Together!</h2>
            </div>
            <div class="right">
                <h4 class="title">SignUp</h4>
                <p class="signup-p">Let's get started! Please create an account.</p>
                <form action="{{ route('signupFunction') }}" method="post" >
                    @csrf
                    <div class="labels">
                        <label for="fname">
                            <h4>First Name</h4>
                            <input type="text" name="fname" id="fname" required placeholder="Enter First Name">
                        </label>
                        <label for="lname">
                            <h4>Last Name</h4>
                            <input type="text" name="lname" id="lname" required placeholder="Enter Last Name">
                        </label>
                    </div>
                    <div class="labels">
                        <label for="email">
                            <h4>Email</h4>
                            <input type="email" name="email" id="email" placeholder="example@gmail.com" required>
                        </label>
                        <label for="phone_number">
                            <h4>Phone Number</h4>
                            <input type="tel" name="phone_number" id="phone_number" placeholder="+212611223344"
                                required>
                        </label>
                    </div>
                    <label for="password">
                        <h4>Password</h4>
                        <input type="password" name="password" id="password" placeholder="Enter Password" required>
                    </label>
                    <div class="btns">
                        <button type="reset">Cancel</button>
                        <button type="submit" name="sendF">Submit</button>
                    </div>
                </form>
                <p class="log">Alreadt Have an account? <a href="{{ route('login') }}">LogIn</a></p>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        const form = document.querySelector('form');

        form.addEventListener('submit', function(event) {
            const firstNameInput = document.getElementById('fname');
            const lastNameInput = document.getElementById('lname');
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');

            const nameRegex = /^[a-zA-Z]+$/;
            const emailRegex = /^[a-zA-Z0-9.-_]+@[a-zA-Z]+\.[a-z]{2,}$/;
            const passwordRegex = /^[A-Za-z\d]{8,}$/;

            if (!nameRegex.test(firstNameInput.value)) {
                alert('Invalid First Name format');
                event.preventDefault();
            }

            if (!nameRegex.test(lastNameInput.value)) {
                alert('Invalid Last Name format');
                event.preventDefault();
            }

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
