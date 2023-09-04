<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <title>Come House Me by Pelow</title>
    <style>
        .divE {
            width: 800px;
        }
        .nested-div {
            width: 1400px;
        }

        @font-face {
            font-family: 'tt_firs_neuemedium';
            src: url('css/ttfirsneue-medium-webfont.woff2') format('woff2'),
                url('css/ttfirsneue-medium-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;

        }

        @font-face {
            font-family: 'tt_firs_neueregular';
            src: url('css/ttfirsneue-regular-webfont.woff2') format('woff2'),
                url('css/ttfirsneue-regular-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;

        }
    </style>
</head>

<body class="relative" style="background-image: url('{{ asset('img/hero_and_footer_background.png') }}');">

    <div class="container-fluid">
        @yield('content')
    </div>


    <div class="bottom-area" style="background-image: url('img/Rectangle.png');">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h4 class="heading-3 white">Getting Started <span class="black">is easy!</span></h4>
                    <p class="heading-2 white">Register your information and make request <br>immediately!</p><br>
                    <button class="btn text-green">Get Started  <i class="fa-solid fa-arrow-right"></i></button>
                </div>
                <div class="col-md-5">
                    <div class="image-box">
                        <!-- <img src="img/Rectangle.png" alt="" srcset=""> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer_logo">
                        <img src="img/logo.png" alt="" class="">
                    </div>
                    <div class="social_media">
                        <i>Facebook</i>
                        <i>Twitter</i>
                        <i>Instagram</i>
                        <i>LinkedIn</i>
                    </div>
                </div>
                <div class="col-md-3">
                    <h5 class="footer_title">Company</h5>
                    <ul class="footer_navi">
                        <li class="footer_link">About</li>
                        <li class="footer_link">Blog</li>
                        <li class="footer_link">Contact</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 class="footer_title">Legal</h5>
                    <ul class="footer_navi">
                        <li class="footer_link">Privacy Policy</li>
                        <li class="footer_link">Terms & Servcies</li>
                        <li class="footer_link">Cookiess</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 class="footer_title">newsletter</h5>
                    <input type="email" name="email" class="form-control margin" id="email" placeholder="Enter your email address">
                    <button class="btn btnColor form-control">Subscribe Now</button>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright">
        <script>
            // Display the copyright symbol and year in a footer element
            var footer = document.getElementById('footer'); // Replace 'footer' with the ID of your footer element
            footer.textContent = '© ' + year + ' - My Website';
            
            </script>
    </div>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>

</html>
