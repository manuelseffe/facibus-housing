@extends('layout.auth')

@section('content')

<div class="auth__bg">
    <div class="auth__top-form">
        <h2>Create your account</h2>
        <p>Already have an account? <a href="/login">Login</a></p><br>
    </div>
    <div class="auth__mid-form">
        <form action="" class="login-form">
            <div class="row">
                <div class="col-md-6">
                    <div class="auth__form-group">
                        <label for="first-name" class="auth__heading">First name</label>
                        <input type="text" name="first-name" id="first-name" class="form-control" placeholder="type your first name" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="auth__form-group">
                        <label for="last-name" class="auth__heading">Last name</label>
                        <input type="text" name="last-name" id="last-name" class="form-control" placeholder="type your last name" />
                    </div>
                </div>
            </div>
           
            <div class="auth__form-group mt-4">
                <label for="email-address" class="auth__heading">Email Address</label>
                <input type="email" name="email-address" id="email-address" class="form-control" placeholder="type your Email address" />
            </div>
            
            <div class="auth__form-group mt-4">
                <label for="password" class="auth__heading">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="type your password" />
                <span>Minimum 8 characters</span>
            </div><br>

            {{-- <input type="sumbit" value="Login" name="submit" class="btn btn__btnColor form-control mt-4 hasCenter"> --}}
            <a href="#" id="submit" class="btn btn__btnColor form-control mt-4 hasCenter">Get Started</a>
            <div class="auth__bottom-form hasCenter mt-5">
                <p>By continuing, it means that you agree to our <a href="/tos">Terms of service,</a> and  <a href="/privacy">Privacy Policy</a></p>
            </div>
        </form>


    </div>
</div>



@endsection