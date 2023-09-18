@extends('layout.dashboard', ['title' => 'Notifications'])

@section('content')
  <div class="notification_page">
    <div class="_heading">
      <h1>Notifications</h1>
    </div>

    @if (true)
      <div class="_container">
        <div class="search_field input-group input-group-lg">
          <span class="input-group-text bg-white"><i class="fa fa-search"></i></span>
          <input type="text" class="form-control" placeholder="Search with keywords. eg: request">
        </div>

        <div class="_table">
          <div class="notifyItem">
            <div class="notifyItem__icon">
              <img src="/images/icons/success_icon.svg" alt="notification-box icon">
            </div>

            <div class="notifyItem__content">
              <h4 class="fw-bold">Verification Successful</h4>
              <p class="text-secondary fs-6">Lorem ipsum dolor sit amet consectetur. At elit lectus dui aliquet proin
                faucibus cursus feugiat molestie. Non consectetur sit sed amet velit.</p>
            </div>

            <div class="notifyItem__time">
              <p class="text-secondary fs-6">34m ago</p>
            </div>
          </div>

          <div class="notifyItem">
            <div class="notifyItem__icon">
              <img src="/images/icons/error_icon.svg" alt="notification-box icon">
            </div>

            <div class="notifyItem__content">
              <h4 class="fw-bold">Request Denied </h4>
              <p class="text-secondary fs-6">Lorem ipsum dolor sit amet consectetur. At elit lectus dui aliquet proin
                faucibus cursus feugiat molestie. Non consectetur sit sed amet velit.</p>
            </div>

            <div class="notifyItem__time">
              <p class="text-secondary fs-6">2 hours ago</p>
            </div>
          </div>

          <div class="notifyItem">
            <div class="notifyItem__icon">
              <img src="/images/icons/default_icon.svg" alt="notification-box icon">
            </div>

            <div class="notifyItem__content">
              <h4 class="fw-bold">Verification Submitted</h4>
              <p class="text-secondary fs-6">Lorem ipsum dolor sit amet consectetur. At elit lectus dui aliquet proin
                faucibus cursus feugiat molestie. Non consectetur sit sed amet velit.</p>
            </div>

            <div class="notifyItem__time">
              <p class="text-secondary fs-6">2 days ago</p>
            </div>
          </div>

          <div class="notifyItem">
            <div class="notifyItem__icon">
              <img src="/images/icons/default_icon.svg" alt="notification-box icon">
            </div>

            <div class="notifyItem__content">
              <h4 class="fw-bold">Starting with Pelow</h4>
              <p class="text-secondary fs-6">Lorem ipsum dolor sit amet consectetur. At elit lectus dui aliquet proin
                faucibus cursus feugiat molestie. Non consectetur sit sed amet velit.</p>
            </div>

            <div class="notifyItem__time">
              <p class="text-secondary fs-6">8 days ago</p>
            </div>
          </div>
        </div>

        <p class="see_more_btn text-success">Show More</p>
      </div>
    @else
      <div class="not_found">
        <img class="box_icon" src="/images/icons/notification-box.png" alt="notification-box icon">
        <h3 class="fw-bold">Nothing to see here</h3>
        <p class="text-secondary fs-4">You are yet to receive any notifications on your account</p>
      </div>
    @endif
  </div>
@endsection
