@extends('layout.dashboard', ['title' => 'Dashboard'])


@section('content')
    <div class="dashboard__top flexMe">
        <div class="welcomeUser">Welcome, <strong>Abdul!</strong> <img class="WelcomeImages" src="{{ asset('img/Emoji.svg') }}" alt=""></div>
        <div class="dashboard__amount">N0.00</div>
    </div>

    <div class="jamboard">
        <div class="usericon"><img src="{{ asset('img/userinfo.svg') }}" alt="User"></div>
        <div class="jamboard-e">
            <div class="dashboard__steps">
                <h1 class="bold">Complete your account setup 1/3 &rarr;</h1>
                <p>You are almost there. Finish setting up your account to enable put in your first request and<br>seamlessly use pelow</p>
            </div>
            <div class="dashboard__counts">
                <ul> 
                    <li>Create Account------------</li>
                    <li>Identity Verification------------</li>
                    <li>Final Verification</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="requests-div mt-4">
        <p>No requests created!</p>
        <p>Click on the button below to put in your first request</p>
        <button class="btn btnColor mt-4">Put in a Request</button>
    </div>

    <hr class="mt-30">

    <div class="requests mb-4">
        <button class="tab-button" onclick="openTab('tab1')">Ongoing request</button>
        <button class="tab-button" onclick="openTab('tab2')">Closed requests</button>
    </div>
    
    <!-- Create tab content -->
    <div id="tab1" class="tab-content">
        <div class="row">
            <div class="col-md-6">
                <div class="requests-card"></div>
            </div>
            <div class="col-md-6">
                <div class="requests-card"></div>
            </div>
        </div>
    </div>

    {{-- <div id="tab2" class="tab-content">
        <div class="row">
            <div class="col-md-6">
                <div class="requests-card"></div>
            </div>
            <div class="col-md-6">
                <div class="requests-card"></div>
            </div>
        </div>
    </div> --}}
@endsection
