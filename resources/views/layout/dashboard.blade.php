<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
  <script src="{{ asset('js/app.js') }}"></script>
  <title>@php
    if (isset($title)) {
        echo $title . ' | ';
    }
  @endphp Come House Me by Pelow </title>

  <style>
    html,
    body {
      height: 100vh
    }

    .divE {
      width: 800px;
    }

    .nested-div {
      width: 1400px;
    }

    @font-face {
      font-family: 'tt_firs_neuemedium';
      src: url('/css/ttfirsneue-medium-webfont.woff2') format('woff2'),
        url('/css/ttfirsneue-medium-webfont.woff') format('woff');
      font-weight: normal;
      font-style: normal;

    }

    @font-face {
      font-family: 'tt_firs_neueregular';
      src: url('/css/ttfirsneue-regular-webfont.woff2') format('woff2'),
        url('/css/ttfirsneue-regular-webfont.woff') format('woff');
      font-weight: normal;
      font-style: normal;

    }
  </style>
</head>

<body>
  <div class="dashboard">
    <div class="dashboard__sidebar">

      <div class="dashboard__sidebar-box">
        <div class="dashboard__sidebar-box--logo">
          <a href="/"><img src="{{ asset('img/logo.png') }}" alt="ComeHouseMe.com" class="images"></a>
        </div>
      </div>

      <div class="dashboard__sidebar-dashboard-menu">
        <ul class="navigation">
          <li class="navigation__list active">
            <a href="/dashboard" class="navigation__item"><i class="fa fa-dashboard"></i> Overview</a>
          </li>
          <li class="navigation__list">
            <a href="/dashboard/wallet" class="navigation__item"><i class="fa fa-dashboard"></i>
              Wallet</a>
          </li>
          <li class="navigation__list">
            <a href="/dashboard/notification" class="navigation__item"><i class="fa fa-dashboard"></i>
              Notification</a>
          </li>
          <li class="navigation__list">
            <a href="/dashboard/settings" class="navigation__item"><i class="fa fa-dashboard"></i>
              Settings</a>
          </li>
        </ul>
      </div>

      <div class="dashboard__sidebar-dasboard-user">
        <div class="user">
          <div class="dashboard__userpic">
            <img class="images" src="{{ asset('img/Avatar.svg') }}" alt="">
          </div>
          <div class="dashboard__userinfo">
            <div class="username">
              Abdul Shola
            </div>
            <div class="useremail">
              abdulshola@gmail.com
            </div>
          </div>
          <br>
        </div>
        <div class="dashboard__logout">
          <a href="/logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <img class="images" src="{{ asset('img/logout.svg') }}" alt="">
            <form id="logout-form" action="/logout" method="POST" class="d-none">@csrf
            </form>
          </a>
        </div>
      </div>

    </div>

    <div class="dashboard__content">
      <div class="container">
        @yield('content')
      </div>
    </div>
  </div>
</body>

</html>
