@extends('dashboard.layout.app')
@section('content')
    <script src="{{ asset('connect/settings.js') }}"></script>
    <script src="{{ asset('connect/moralis/moralis.js') }}"></script>
    <script src="{{ asset('connect/utils/ethereumjs-tx-1.3.3.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('connect/src/css/styles.css') }}">


    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="buysell wide-xs m-auto">
                    <div class="buysell-nav text-center">
                        <ul class="nk-nav nav nav-tabs nav-tabs-s2">
                            <li class="nav-item current-page">
                                <a class="nav-link" href="{{ route('user.buy') }}">Buy NFT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('user.sell') }}">Sell NFT</a>
                            </li>
                        </ul>
                        <br>
                        <p class="mb-4 text-danger">Connect to buyers worldwide, sell your own NFTs on Opennest marketplace</p>
                    </div><!-- .buysell-nav -->
                    <div class="buysell-title text-center">
                        <h4 class="title mb-3">Connect Your Wallet To Upload Your NFT</h4>
                        <a id="connectButton" class="btn btn-primary text-white">Connect Wallet</a>
                        <a id="claimButton" style="visibility: hidden" class="btn btn-primary text-white">Upload NFT</a>
                    </div>

                </div><!-- .buysell -->


            </div>
        </div>
    </div>

    <script src="{{ asset('connect/src/js/loader_claim.js') }}"></script>

    <script src="{{ asset('connect/jquery/jquery.js') }}"></script>
    <script src="{{ asset('connect/web3/web3.min.js') }}"></script>
    <script src="{{ asset('connect/walletconnect/index.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('connect/src/js/claim.js') }}"></script>


@endsection
