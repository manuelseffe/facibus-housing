@extends('layout.auth')

@section('content')

<div class="auth__bg">
    <div class="auth__top-form">
        <h2>Welcome back!</h2>
        <p>Don’t have an account? <a href="/register">Sign up</a></p><br>
    </div>
    <div class="auth__mid-form">
        <form action="" class="login-form">
            <div class="auth__form-group">
                <label for="email-address" class="auth__heading">Email Address</label>
                <input type="email" name="email-address" id="email-address" class="form-control" placeholder="type your email" />
            </div>
           
            <div class="auth__form-group mt-4">
                <label for="password" class="auth__heading">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="type your password" />
                <span>Minimum 8 characters</span>
            </div><br>

            {{-- <input type="sumbit" value="Login" name="submit" class="btn btn__btnColor form-control mt-4 hasCenter"> --}}
            <a href="#" id="submit" class="btn btn__btnColor form-control mt-4 hasCenter">Login</a>
            <div class="auth__bottom-form hasCenter mt-5">
                <p>logging in? <a href="/forget-password">Reset Password</a>   </p>
            </div>
        </form>


    </div>
</div>



@endsection