@extends('dashboard.layout.app')
@section('content')

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
                        <a href="{{ route('user.connectWallet') }}" class="btn btn-primary">Connect Wallet</a>
                    </div>

                </div><!-- .buysell -->


            </div>
        </div>
    </div>

@endsection
