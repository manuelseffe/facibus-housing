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
            <form class="security_form">
              <div class="checbox_form_group flexSB">
                <div class="d-grid">
                  <label for="" class="form-label">Two Factor Authentication (2FA)</label>
                  <span class="text-gray">Before enabling Two-Factor Authentication, install a 2FA app on your
                    phone, e.g-LastPass Authenticator or Google Authenticator</span>
                </div>

                <div class="form-check form-switch" data-bs-toggle="modal" data-bs-target="#TwoFactorModal">
                  <input class="form-check-input" type="checkbox" role="switch" disabled id="">
                </div>
              </div>

              <div class="checbox_form_group flexSB">
                <div class="d-grid">
                  <label for="" class="form-label">Password</label>
                  <span class="text-gray">Reset the password for this account</span>
                </div>

                <div class="text_btn fs-5" type="button" data-bs-toggle="modal"
                  data-bs-target="#ChangePasswordModal">
                  Change Password
                </div>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>

  {{-- Settings Modal --}}
  <div class="modal fade" id="ChangePasswordModal" tabindex="-1" aria-labelledby="ChangePasswordLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body my-2">
          <h2 class="modal-title fw-bold text-center" id="ChangePasswordLabel">Change Password</h2>

          <form class="changepassword_form mx-auto">
            <div class="form_group">
              <label for="" class="form-label">Old Password</label>
              <input type="password" class="form-control">
            </div>

            <div class="form_group">
              <label for="" class="form-label">New Password</label>
              <input type="password" class="form-control">
            </div>

            <div class="form_group">
              <label for="" class="form-label">Confirm New Password</label>
              <input type="password" class="form-control">
            </div>

            <div class="modal-footer border-0 mx-auto">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Change Password</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>

  <div class="modal fade" id="TwoFactorModal" tabindex="-1" aria-labelledby="ChangePasswordLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body my-2">
          <h2 class="modal-title fw-bold text-center" id="ChangePasswordLabel">Select Authentication method</h2>

          <form class="2fa_form mx-auto">
            <div class="form_group">
              <label for="" class="form-label">Authenticator App</label>
            </div>

            <div class="form_group">
              <label for="" class="form-label">SMS Verification</label>
            </div>

            {{-- <div class="modal-footer border-0 mx-auto">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Change Password</button>
            </div> --}}
          </form>
        </div>

      </div>
    </div>
  </div>
@endsection
