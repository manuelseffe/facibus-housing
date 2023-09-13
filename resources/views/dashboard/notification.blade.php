@extends('layout.dashboard', ['title' => 'Notifications'])

@section('content')
  <div class="notification_page">
    <div class="_heading">
      <h1>Notifications</h1>
    </div>

    <div class="_container">
      <img class="box_icon" src="/images/icons/notification-box.png" alt="notification-box icon">
      <h3 class="fw-bold">Nothing to see here</h3>
      <p class="text-secondary fs-4">You are yet to receive any notifications on your account</p>
    </div>
  </div>
@endsection
