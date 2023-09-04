@extends('layout.auth')

@section('content')

<div class="auth__bg">
    <div class="auth__top-form">
        <h2>Reset Password</h2>
        <p>Enter your Email address, we will send your instructions to generate a new password.</p><br>
    </div>
    <div class="auth__mid-form">
        <form action="" class="login-form">
            <div class="auth__form-group">
                <label for="email-address" class="auth__heading">Email Address</label>
                <input type="email" name="email-address" id="email-address" class="form-control" placeholder="type your email" />
            </div>

            <a href="#" id="submit" class="btn btn__btnColor form-control mt-4 hasCenter">Send instructions</a>
            <div class="auth__bottom-form hasCenter mt-5">
                <p><a href="/login">Back to login</a></p>
            </div>
        </form>


    </div>
</div>



@endsection