@extends('layout.auth')

@section('content')

<div class="auth__bg">
    <div class="auth__top-form">
        <h2>Welcome back!</h2>
        <p>Don’t have an account? <a href="{{ route('register') }}">Sign up</a></p><br>
    </div>
    <div class="auth__mid-form">
        <form action="{{ route('login') }}" class="login-form" method="POST">
            @csrf <!-- Add the CSRF token field for security -->
            <div class="auth__form-group">
                <label for="email-address" class="auth__heading">Email Address</label>
                <input type="email" name="email" id="email-address" class="form-control" placeholder="Type your email" />
                @error('email') <!-- Display the email validation error, if any -->
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="auth__form-group mt-4">
                <label for="password" class="auth__heading">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Type your password" />
                @error('password') <!-- Display the password validation error, if any -->
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <span>Minimum 8 characters</span>
            </div><br>

            <button id="submit" class="btn btn__btnColor form-control mt-4 hasCenter">Login</button>

            <div class="auth__bottom-form hasCenter mt-5">
                <p>Logging in? <a href="/forget-password">Reset Password</a></p>
            </div>
        </form>
    </div>
</div>

@endsection
