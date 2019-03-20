<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Teachers & Students Portal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
    <!-- Bootstrap CSS File -->
    <link href="{{ asset('theme_welcome/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ asset('theme_welcome/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme_welcome/lib/animate-css/animate.min.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('theme_welcome/css/style.css') }}" rel="stylesheet">


</head>

<body>
<div id="preloader"></div>

<section id="hero">
    <div class="hero-container">
        <div class="wow fadeIn">
            <div class="hero-logo">
                <img class="" src="{{ asset('theme_welcome/img/logo.png') }}" alt="Teacher's Portal">
            </div>

            <h1>Welcome to Teacher's Portal</h1>
            <h2>You can <span class="rotating">view routines, view counseling schedule, update profile</span></h2>
            <div class="actions">
                <a href="{{ route('login') }}" class="btn-get-started">LOGIN</a>
                <a href="{{ route('register') }}" class="btn-services">REGISTER</a>
            </div>
        </div>
    </div>
</section>


<!-- Required JavaScript Libraries -->
<script src="{{ asset('theme_welcome/lib/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('theme_welcome/lib/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('theme_welcome/lib/superfish/hoverIntent.js') }}"></script>
<script src="{{ asset('theme_welcome/lib/superfish/superfish.min.js') }}"></script>
<script src="{{ asset('theme_welcome/lib/morphext/morphext.min.js') }}"></script>
<script src="{{ asset('theme_welcome/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('theme_welcome/lib/stickyjs/sticky.js') }}"></script>
<script src="{{ asset('theme_welcome/lib/easing/easing.js') }}"></script>

<!-- Template Specisifc Custom Javascript File -->
<script src="{{ asset('theme_welcome/js/custom.js') }}"></script>

</body>

</html>
