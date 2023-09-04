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
<body class="verify__bg">

@yield('content')

</body>
</html>


