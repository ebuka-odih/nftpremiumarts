
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register - NFT Marketplace</title>
    <meta name="description"
          content="Neftify is the complete UX & UI dashboard for NFT. Here included bids, collection, wallet, and all user setting pages including profile, application, activity, payment method, api, sign in & sign up etc.">


    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="@@dashboard">

{{--<div id="preloader"><i>.</i><i>.</i><i>.</i></div>--}}

<div class="authincation section-padding">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-xl-5 col-md-6">
                <div class="mini-logo text-center my-4">
                    <a href="{{ route('index') }}">
                        <img style="margin-bottom: -30px; margin-top: -20px" height="120" width="250" src="{{ asset('img/logo.png') }}" alt="" class="logo-primary">

                    </a>
                    <h4 class="card-title mt-5">Sign up to NFTPremiumarts</h4>
                </div>
                <div class="auth-form card">
                    <div class="card-body">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <input type="hidden" name="referred_by" value="{{ request()->id}}" />
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input name="name" type="text" class="form-control" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label">Email</label>
                                    <input name="email" type="text" class="form-control" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label" for="username">Username</label>
                                    <input name="username" type="text" id="username" class="form-control" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label">Password</label>
                                    <input name="password" type="password" class="form-control" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input name="password_confirmation" type="password" class="form-control" value="">
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input name="acceptTerms" type="checkbox" class="form-check-input " value="false">
                                        <label class="form-check-label">I
                                            certify that I am 18 years of age or older, and agree to the
                                            <a href="#" class="text-primary">User Agreement</a> and
                                            <a href="#" class="text-primary">Privacy Policy</a>.
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 d-grid gap-2">
                                <button type="submit" class="btn btn-primary mr-2">Sign
                                    Up
                                </button>
                            </div>
                        </form>
                        <div class="text-center">
                            <p class="mt-3 mb-0"><a class="text-primary" href="{{ route('login') }}">Sign in</a> to your account</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('js/scripts.js') }}"></script>


</body>


<!-- Mirrored from neftify-html.vercel.app/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Jun 2022 00:13:27 GMT -->
</html>
