<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opennest - NFT Marketplace</title>
    <meta name="description"
          content="Opennest is NFT. Here included bids, collection, wallet, and all user setting pages including profile, application, activity, payment method, api, sign in & sign up etc.">


    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/logo.svg') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    <style>
        .navigation .navbar ul > li > a{
            color: white !important;
        }

        li.footer-text > a{
           color: white;
        }
    </style>
</head>

<body class="@@dashboard">

<div id="preloader"><i>.</i><i>.</i><i>.</i></div>

<div id="main-wrapper" class="front">

    <div style="background-color: rgb(24, 104, 183);" class="header landing">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="navigation">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="brand-logo">
                                <a href="{{ route('index') }}">
                                    <img style="margin-bottom: -20px; margin-top: -20px" height="110" width="110" src="img2/logo.png" alt="" class="logo-primary">
{{--                                    <h3 class="text-white">Opennest</h3>--}}
{{--                                    <img src="images/logow.png" alt="" class="logo-white">--}}
                                </a>
                            </div>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto" >
                                    <li class="nav-item dropdown"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('explore') }}">Explore</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('collections') }}">Collections</a></li>
{{--                                    <li class="nav-item"><a class="nav-link" href="item.html">Item</a></li>--}}
                                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('user.collections') }}">Upload</a></li>
                                </ul>
                            </div>
                            <div class="signin-btn d-flex align-items-center">
                                <div class="dark-light-toggle theme-switch" onclick="themeToggle()">
                                    <span class="dark"><i class="ri-moon-line"></i></span>
                                    <span class="light"><i class="ri-sun-line"></i></span>
                                </div>
                                @guest
                                    <a class="btn btn-primary" href="{{ route('login') }}">Connect</a>
                                @endguest

                               @auth
                                <a class="btn btn-primary" href="{{ route('login') }}">Connected</a>
                                @endauth
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


        @yield('content')


    <div style="background-color: rgb(24, 104, 183);" class="bottom section-padding triangle-top-dark triangle-bottom-dark">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-7 col-sm-8">
                    <div class="bottom-logo">
                        <img height="120" width="120" src="img2/logo.png" alt="" class="logo-primary">

                        {{--                    <img class="pb-3" src="images/logoh.png" alt="">--}}
{{--                        <h3 class="pb-3 text-white">Opennest</h3>--}}
                        <p class="text-white">We have professional market insight
                            We flip, collect and invest in NFT projects.</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-5 col-sm-4 col-6">
                    <div class="bottom-widget">
                        <h4 class="widget-title">About us</h4>
                        <ul >
                            <li><a class="text-white" href="explore">Explore</a></li>
                            <li><a class="text-white" href="{{ route('collections') }}">Collections</a></li>
                            <li><a class="text-white" href="{{ route('contact') }}">Contact Us</a></li>
                            <li><a class="text-white" href="{{ route('login') }}">Connect</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6">
                    <div class="bottom-widget">
                        <h4 class="widget-title">Settings</h4>
                        <ul>
                            <li><a class="text-white" href="{{ route('user.dashboard') }}">Application</a></li>
                            <li><a class="text-white" href="{{ route('user.security') }}">Security</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-8 col-sm-8">
                    <div class="bottom-widget">
                        <h4 class="widget-title">Profile</h4>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                <ul>
                                    <li><a class="text-white" href="{{ route('user.profile') }}">Profile</a></li>
                                    <li><a class="text-white" href="{{ route('user.collections') }}">Collected</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div style="background-color: rgb(37,83,128);" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="copyright">
                        <p class="text-white">© Copyright 2022 <a href="#" class="text-white">Opennest</a> <!-- -->All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="footer-social">
                        <ul>
                            <li><a href="#" style="color: white"><i class="bi bi-facebook"></i></a></li>
                            <li><a href="#" style="color: white"><i class="bi bi-twitter"></i></a></li>
                            <li><a href="#" style="color: white"><i class="bi bi-linkedin"></i></a></li>
                            <li><a href="#" style="color: white"><i class="bi bi-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>



<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('vendor/magnific-popup/magnific-popup.js') }}"></script>
<script src="{{ asset('js/plugins/magnific-popup-init.js') }}"></script>

<script src="{{ asset('js/scripts.js') }}"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/62cacb7bb0d10b6f3e7ba2d0/1g7k2lorb';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

</body>


<!-- Mirrored from neftify-html.vercel.app/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Jun 2022 00:12:29 GMT -->
</html>
