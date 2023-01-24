@extends('dashboard.layout.app')
@section('content')

    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="buysell wide-xs m-auto">
                    <div class="buysell-nav text-center">
                        <ul class="nk-nav nav nav-tabs nav-tabs-s2">
                            <li class="nav-item current-page">
                                <a class="nav-link active" href="{{ route('user.buy') }}">Buy NFT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.sell') }}">Sell NFT</a>
                            </li>
                        </ul>
                    </div><!-- .buysell-nav -->
                </div><!-- .buysell -->

                <div class="nk-block nk-block-lg">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h4 class="title nk-block-title">NFT Marketplace</h4>
                            <p>Make direct NFT purchase from NFTPremium</p>
                        </div>
                    </div>
                    <hr>
                    <div class="card card-preview">
                        <div class="card-inner">
                            <div class="row">
                                @foreach($nfts as $item)
                                <div class="col-lg-4 mb-2">
                                    <div class="card card-bordered">
                                        <img src="{{ asset('nfts/'.$item->image) }}" class="card-img-top" alt="">
                                        <div class="card-inner">
                                            <h5 class="card-title">{{ $item->name }}</h5>
                                            <div class="row">
                                                <div class="col-6">
                                                    <p class="mb-2">Auction</p>
                                                </div>
                                                <div  class="col-6">
                                                    <h5 class="text-success">Live </h5>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-6">
                                                    <p class="mb-2">Bid : <strong class="text-primary">{{ $item->bid }}</strong></p>
                                                </div>
                                                <div  class="col-6">
                                                    <h5 class="text-muted">{{ $item->price }}</h5>
                                                </div>
                                            </div>
                                            <a href="{{ route('user.details', $item->id) }}" class="btn btn-primary">Place a Bid</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div><!-- .card-preview -->

                </div>

            </div>
        </div>
    </div>

@endsection
