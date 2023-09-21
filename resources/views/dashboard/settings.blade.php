@extends('layout.dashboard', ['title' => 'Settings'])

@section('content')
  <div class="settings_page">
    <div class="_heading">
      <h1>Settings</h1>
    </div>

    <div class="_container">
      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
            type="button" role="tab" aria-controls="nav-profile">Personal Info
          </button>
          <button class="nav-link " id="nav-notification-tab" data-bs-toggle="tab" data-bs-target="#nav-notification"
            type="button" role="tab" aria-controls="nav-notification">Notification settings
          </button>
          <button class="nav-link" id="nav-security-tab" data-bs-toggle="tab" data-bs-target="#nav-security"
            type="button" role="tab" aria-controls="nav-security">Security settings
          </button>
        </div>
      </nav>

      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
          tabindex="0">
          <div class="tab_panel_content">
            <form class="profile_form">
              <div class="profilepic_group flex mb-5">
                <div class="_icon me-3">
                  <img src="{{ asset('img/avatar.svg') }}" alt="User">
                </div>
                <span class="text_btn fs-5">Upload profile pic</span>
              </div>

              <div class="row">
                <div class="col-12 col-md-6 form_group">
                  <label for="" class="form-label">First Name</label>
                  <input type="text" class="form-control">
                </div>

                <div class="col-12 col-md-6 form_group">
                  <label for="" class="form-label">Last Name</label>
                  <input type="text" class="form-control">
                </div>
              </div>

              <div class="form_group">
                <label for="" class="form-label">E-mail</label>
                <input type="email" class="form-control">
              </div>

              <div class="form_group">
                <label for="" class="form-label">Phone Number</label>
                <input type="text" class="form-control">
              </div>

              <div class="form_group mt-5">
                <button class="btn btn-success" type="submit">Save changes</button>
              </div>
            </form>
          </div>
        </div>

        <div class="tab-pane fade" id="nav-notification" role="tabpanel" aria-labelledby="nav-notification-tab"
          tabindex="0">

          <p class="text-gray fz-15">
            We may still send you notifications about your account outside your notification settings
          </p>

          <div class="tab_panel_content">
            <form class="notification_form">
              <div class="checbox_form_group flexSB">
                <div class="d-grid">
                  <label for="" class="form-label">Login Alerts</label>
                  <span class="text-gray">Get alerts when you login to your below account </span>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="">
                </div>
              </div>

              <div class="checbox_form_group flexSB">
                <div class="d-grid">
                  <label for="" class="form-label">Reqest Alerts</label>
                  <span class="text-gray">Get Notifications on the status of your ongoing request</span>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" checked id="">
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="tab-pane fade" id="nav-security" role="tabpanel" aria-labelledby="nav-security-tab"
          tabindex="0">
          <div class="tab_panel_content">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum neque fugiat nulla nam fuga tenetur
            recusandae, aut ab delectus aperiam, animi quam illo. Quasi, dignissimos consequuntur doloremque
            laudantium
            quis ratione.
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection
