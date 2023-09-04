@extends('layout.body')

@section('content')

<div class="container-fluid flexMe vh-100">
    <div class="row">
        <div class="verify__box hasCenter">
            <h1 class="mb-5">Verify your Email</h1>
            <p class="mb-5">
                <span class="break mb-5">For security purposes, please verify the email you used in creating this account.</span>
                <span class="hasCenter mb-5"><strong>abdulshola@example.com</strong></span>
                <span class="break">If you did not get an email, click on the resend button below.</span>
            </p>
            <a href="#" class="btn btn__btnColor form-control mt-4 hasCenter">Resend email verification</a>
        </div>
    </div>
</div>


@endsection