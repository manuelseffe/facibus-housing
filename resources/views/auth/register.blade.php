@extends('layout.auth')

@section('content')
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


    </div>
  </div>
@endsection
