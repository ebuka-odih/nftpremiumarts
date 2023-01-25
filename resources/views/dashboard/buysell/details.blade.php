@extends('dashboard.layout.app')
@section('content')

    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-block-head-sub"><a class="back-to" href="{{ route('user.buy') }}"><em class="icon ni ni-arrow-left"></em><span>Marketplace</span></a></div>

            <div class="nk-content-body">

                <div class="nk-block nk-block-lg">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h4 class="title nk-block-title">{{ $nft->name }} Details</h4>
                            <p>Below are more details about this NFT</p>
                        </div>
                    </div>
                    <hr>
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    @if(session()->has('declined'))
                        <div class="alert alert-danger">
                            {{ session()->get('declined') }}
                        </div>
                    @endif
                    <div class="card card-preview">
                        <div class="card-inner">
                            <div class="row">
                                    <div class="col-lg-7 mb-2">
                                        <div class="card ">
                                            <img src="{{ asset('nfts/'.$nft->image) }}" class="card-img-top" alt="">

                                        </div>
                                    </div>

                                <div class="col-lg-5 mb-2">
                                    <div class="card ">
                                        <div class="card-inner">
                                            <h5 class="card-title">{{ $nft->name }}</h5>
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
                                                    <p class="mb-2">Bid : <strong class="text-primary">{{ $nft->bid }}</strong></p>
                                                </div>
                                                <div  class="col-6">
                                                    <h5 class="text-muted">{{ $nft->price }}</h5>
                                                </div>
                                            </div>
                                            <p>{{ $nft->description }}</p>
                                            <div class="d-flex">
                                                <form action="{{ route('user.buy.item') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="nft_id" value="{{ $nft->id }}">
                                                    <input type="hidden" name="amount" value="{{ $nft->price }}">
                                                    <button type="submit" class="btn btn-primary">Buy this item</button>
                                                </form>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div><!-- .card-preview -->

                </div>

            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>

    <script>
        new ClipboardJS('.btn');
    </script>
@endsection
