
<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
{{--    <base href="../../">--}}
    <meta charset="utf-8">
    <meta name="author" content="Opennest">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Dashboard | Opennest</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css?ver=2.4.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme.css?ver=2.4.0') }}">
</head>

<body class="nk-body npc-crypto bg-white has-sidebar ">
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
        <!-- sidebar @s -->
        <div class="nk-sidebar nk-sidebar-fixed " data-content="sidebarMenu">
            <div class="nk-sidebar-element nk-sidebar-head">
                <div class="nk-sidebar-brand">
                    <a href="{{ route('user.dashboard') }}" class="logo-link nk-sidebar-logo">
                        <h3>Opennest</h3>
                        <span class="nio-version">Crypto</span>
                    </a>
                </div>
                <div class="nk-menu-trigger mr-n2">
                    <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                </div>
            </div><!-- .nk-sidebar-element -->
            <div class="nk-sidebar-element">
                <div class="nk-sidebar-body" data-simplebar>
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-widget d-none d-xl-block">
                            <div class="user-account-info between-center">
                                <div class="user-account-main">
                                    <h6 class="overline-title-alt">Available Balance</h6>
                                    <div class="user-balance">@convert(auth()->user()->balance) <small class="currency currency-btc">USD</small></div>
                                    <div class="user-balance-alt">{{ auth()->user()->showRate() }} <span class="currency currency-btc">BTC</span></div>
                                </div>
                                <a href="{{ route('user.dashboard') }}" class="btn btn-white btn-icon btn-light"><em class="icon ni ni-line-chart"></em></a>
                            </div>

                            <div class="user-account-actions">
                                <ul class="g-3">
                                    <li><a href="{{ route('user.deposit') }}" class="btn btn-lg btn-primary"><span>Deposit</span></a></li>
                                    <li><a href="{{ route('user.withdraw') }}" class="btn btn-lg btn-warning"><span>Withdraw</span></a></li>
                                </ul>
                            </div>
                        </div><!-- .nk-sidebar-widget -->
                        <div class="nk-sidebar-widget nk-sidebar-widget-full d-xl-none pt-0">
                            <a class="nk-profile-toggle toggle-expand" data-target="sidebarProfile" href="#">
                                <div class="user-card-wrap">
                                    <div class="user-card">
                                        <div class="user-avatar">
                                            <span>{{ auth()->user()->avatar }}</span>
                                        </div>
                                        <div class="user-info">
                                            <span class="lead-text">{{ auth()->user()->name }}</span>
                                            <span class="sub-text">{{ auth()->user()->email }}</span>
                                        </div>
                                        <div class="user-action">
                                            <em class="icon ni ni-chevron-down"></em>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="nk-profile-content toggle-expand-content" data-content="sidebarProfile">
                                <div class="user-account-info between-center">
                                    <div class="user-account-main">
                                        <h6 class="overline-title-alt">Available Balance</h6>
                                        <div class="user-balance">@convert(auth()->user()->balance)) <small class="currency currency-btc">USD</small></div>
                                        <div class="user-balance-alt">{{ auth()->user()->showRate() }} <span class="currency currency-btc">BTC</span></div>
                                    </div>
                                    <a href="#" class="btn btn-icon btn-light"><em class="icon ni ni-line-chart"></em></a>
                                </div>
                                <ul class="user-account-links">
                                    <li><a href="{{ route('user.withdraw') }}" class="link"><span>Withdraw Funds</span> <em class="icon ni ni-wallet-out"></em></a></li>
                                    <li><a href="{{ route('user.dashboard') }}" class="link"><span>Deposit Funds</span> <em class="icon ni ni-wallet-in"></em></a></li>
                                </ul>
                                <ul class="link-list">
                                    <li><a href="{{ route('user.profile') }}"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                    <li><a href="{{ route('user.account') }}"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                </ul>
                                <ul class="link-list">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <em class="icon ni ni-signout"></em><span>Sign out</span>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- .nk-sidebar-widget -->
                        <div class="nk-sidebar-menu">
                            <!-- Menu -->
                            <ul class="nk-menu">
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title">Menu</h6>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{ route('user.dashboard') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                        <span class="nk-menu-text">Dashboard</span>
                                    </a>
                                </li>
{{--                                <li class="nk-menu-item">--}}
{{--                                    <a href="{{ route('user.wallet') }}" class="nk-menu-link">--}}
{{--                                        <span class="nk-menu-icon"><em class="icon ni ni-wallet-alt"></em></span>--}}
{{--                                        <span class="nk-menu-text">My Account</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
                                <li class="nk-menu-item">
                                    <a href="{{ route('user.buy4me') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-coin-alt"></em></span>
                                        <span class="nk-menu-text">Buy 4 Me</span>
                                    </a>
                                </li>

                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                                        <span class="nk-menu-icon"><em class="icon ni ni-tranx"></em></span>
                                        <span class="nk-menu-text">Transactions</span>
                                    </a>
                                    <ul class="nk-menu-sub" style="display: none;">
                                        <li class="nk-menu-item">
                                            <a href="{{ route('user.transactions') }}" class="nk-menu-link" data-original-title="" title="">
                                                <span class="nk-menu-text">History</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{ route('user.deposit.transactions') }}" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Deposits</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{ route('user.pendingTransactions') }}" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Pending Deposits</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{ route('user.withdraw.transactions') }}" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Withdrawals</span></a>
                                        </li>

                                    </ul><!-- .nk-menu-sub -->
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{ route('user.buy') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-coins"></em></span>
                                        <span class="nk-menu-text">Buy / Sell NFT</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{ route('user.plans') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-coin-alt-fill"></em></span>
                                        <span class="nk-menu-text">Invest / Earn</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{ route('user.collections') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-repeat"></em></span>
                                        <span class="nk-menu-text">My Collections</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{ route('user.collections') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-upload-cloud"></em></span>
                                        <span class="nk-menu-text">My Uploads</span>
                                    </a>
                                </li>

                                <li class="nk-menu-item">
                                    <a href="{{ route('user.profile') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-account-setting"></em></span>
                                        <span class="nk-menu-text">My Profile</span>
                                    </a>
                                </li>
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title">Return to</h6>
                                </li>
{{--                                <li class="nk-menu-item">--}}
{{--                                    <a href="{{ route('user.dashboard') }}" class="nk-menu-link">--}}
{{--                                        <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>--}}
{{--                                        <span class="nk-menu-text">Main Dashboard</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
                                <li class="nk-menu-item">
                                    <a href="{{ route('index') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-layers"></em></span>
                                        <span class="nk-menu-text">Homepage</span>
                                    </a>
                                </li>
                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->

                        <div class="nk-sidebar-footer">
                            <ul class="nk-menu nk-menu-footer">
                                <li class="nk-menu-item">
                                    <a href="#" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-help-alt"></em></span>
                                        <span class="nk-menu-text">Support</span>
                                    </a>
                                </li>
                            </ul><!-- .nk-footer-menu -->
                        </div><!-- .nk-sidebar-footer -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-body -->
            </div><!-- .nk-sidebar-element -->
        </div>
        <!-- sidebar @e -->
        <!-- wrap @s -->
        <div class="nk-wrap ">
            <!-- main header @s -->
            <div class="nk-header nk-header-fluid nk-header-fixed is-light">
                <div class="container-fluid">
                    <div class="nk-header-wrap">
                        <div class="nk-menu-trigger d-xl-none ml-n1">
                            <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                        </div>
                        <div class="nk-header-brand d-xl-none">
                            <a href="/" class="logo-link">
                               <h3>Opennest</h3>
                                <span class="nio-version">Crypto</span>
                            </a>
                        </div>
                        <div class="nk-header-news d-none d-xl-block">
                            <div class="nk-news-list">
                                <a class="nk-news-item" href="#">
                                    <div class="nk-news-icon">
                                        <em class="icon ni ni-card-view"></em>
                                    </div>
                                    <div class="nk-news-text">
                                        <p>Do you know we can help you analyze and purchase profitable NFTs on your behalf </p>
                                        <em class="icon ni ni-external"></em>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="nk-header-tools">
                            <ul class="nk-quick-nav">
                                <li class="dropdown user-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <div class="user-toggle">
                                            <div class="user-avatar sm">
                                                <em class="icon ni ni-user-alt"></em>
                                            </div>
                                            <div class="user-info d-none d-md-block">
                                                <div class="user-status user-status-unverified">{!! auth()->user()->status() !!}</div>
                                                <div class="user-name dropdown-indicator">{{ auth()->user()->name }}</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                                        <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    <span>{{ auth()->user()->avatar }}</span>
{{--                                                    <img src="{{ asset('avatar/'.auth()->user()->avatar) }}" alt="">--}}
                                                </div>
                                                <div class="user-info">
                                                    <span class="lead-text">{{ auth()->user()->name }}</span>
                                                    <span class="sub-text">{{ auth()->user()->email }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-inner user-account-info">
                                            <h6 class="overline-title-alt">Main Wallet Account</h6>
                                            <div class="user-balance">@convert(auth()->user()->balance) <small class="currency currency-btc">USD</small></div>
                                            <a href="#" class="link"><span>Withdraw Funds</span> <em class="icon ni ni-wallet-out"></em></a>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li><a href="{{ route('user.profile') }}"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                <li><a href="{{ route('user.account') }}"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        <em class="icon ni ni-signout"></em><span>Sign out</span>
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main header @e -->
            <!-- content @s -->
           @yield('content')
            <!-- content @e -->
            <!-- footer @s -->
            <div class="nk-footer nk-footer-fluid">
                <div class="container-fluid">
                    <div class="nk-footer-wrap">
                        <div class="nk-footer-copyright"> &copy; 2022 <a href="opennest.io">Opennest.io</a>
                        </div>
                        <div class="nk-footer-links">
                            <ul class="nav nav-sm">
                                <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer @e -->
        </div>
        <!-- wrap @e -->
    </div>
    <!-- main @e -->
</div>
<!-- app-root @e -->
<!-- JavaScript -->
<script src="{{ asset('assets/js/bundle.js?ver=2.4.0') }}"></script>
<script src="{{ asset('assets/js/scripts.js?ver=2.4.0') }}"></script>
<script src="{{ asset('assets/js/charts/chart-crypto.js?ver=2.4.0') }}"></script>

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

</html>
