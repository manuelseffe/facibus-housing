@extends('layout.auth')

@section('content')
<<<<<<< HEAD
    <div class="auth__bg">
        <div class="auth__top-form">
            <h2>Create your account</h2>
            <p>Already have an account? <a href="{{ route('login') }}">Login</a></p><br>
        </div>
        <div class="auth__mid-form">
            <form action="{{ route('register') }}" method="POST" class="login-form">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="auth__form-group">
                            <label for="first_name" class="auth__heading">First name</label>
                            <input type="text" name="first_name" id="first_name" class="form-control"
                                placeholder="Type your first name" />
                            @error('first_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="auth__form-group">
                            <label for="last_name" class="auth__heading">Last name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control"
                                placeholder="Type your last name" />
                            @error('last_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="auth__form-group mt-4">
                    <label for="email" class="auth__heading">Email Address</label>
                    <input type="email" name="email" id="email" class="form-control"
                        placeholder="Type your email address" />
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="auth__form-group mt-4">
                            <label for="password" class="auth__heading">Password</label>
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Type your password (min. 8 characters)" />
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="auth__form-group mt-4">
                            <label for="password_confirmation" class="auth__heading">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="form-control" placeholder="Confirm your password" />
                        </div>
                    </div>
                </div>
=======
  <div class="auth__bg">
    <div class="auth__top-form">
      <h2>Create your account</h2>
      <p>Already have an account? <a href="/login">Login</a></p><br>
    </div>

    {{-- Page Feedback/Messages --}}
    @include('inc.messages')

    <div class="auth__mid-form">
      <form method="POST" action="/register" class="login-form">
        @csrf

        <div class="row">
          <div class="col-md-6">
            <div class="auth__form-group">
              <label for="first-name" class="auth__heading">First name</label>
              <input type="text" name="firstname" id="first-name" class="form-control"
                placeholder="type your first name" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="auth__form-group">
              <label for="last-name" class="auth__heading">Last name</label>
              <input type="text" name="lastname" id="last-name" class="form-control"
                placeholder="type your last name" />
            </div>
          </div>
        </div>

        <div class="auth__form-group mt-4">
          <label for="email-address" class="auth__heading">Email Address</label>
          <input type="email" name="email" id="email-address" class="form-control"
            placeholder="type your Email address" />
        </div>

        <div class="auth__form-group mt-4">
          <label for="password" class="auth__heading">Password</label>
          <input type="password" name="password" id="password" class="form-control"
            placeholder="type your password" />
          <span>Minimum 8 characters</span>
        </div><br>

        {{-- <input type="sumbit" value="Login" name="submit" class="btn btn__btnColor form-control mt-4 hasCenter"> --}}
        <button id="submit" type="submit" class="btn btn__btnColor form-control mt-4 hasCenter">Get
          Started</button>

        <div class="auth__bottom-form hasCenter mt-5">
          <p>By continuing, it means that you agree to our <a href="/tos">Terms of service,</a> and <a
              href="/privacy">Privacy Policy</a></p>
        </div>
      </form>

>>>>>>> 9e9673466a2d2f7048b22364b484d503fcb30e1a

                <button id="submit" class="btn btn__btnColor form-control mt-4 hasCenter">Get Started</button>
                <div class="auth__bottom-form hasCenter mt-5">
                    <p>By continuing, it means that you agree to our <a href="/tos">Terms of service</a> and <a
                            href="/privacy">Privacy Policy</a></p>
                </div>
            </form>
        </div>
    </div>
<<<<<<< HEAD
=======
  </div>
>>>>>>> 9e9673466a2d2f7048b22364b484d503fcb30e1a
@endsection
