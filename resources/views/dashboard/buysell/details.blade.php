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
                                            <div class="d-flex"><a  class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Buy this item</a></div>



                                            <div class="collapse" id="collapseExample">
                                                <div class="card card-body">
                                                    <h3 class="mb-4">Pay to the wallet below</h3>
                                                    <hr>
                                                    <h5>{{ $nft->payment_method->name }}</h5>
                                                    <div class="input-group">
                                                        <input type="text" readonly class="form-control" id="foo" value="{{ $nft->payment_method->value }}">

                                                        <div class="input-group-prepend">
                                                            <button class="btn input-group-text" data-clipboard-target="#foo">
                                                                Copy
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 mt-2">
                                                        {!! QrCode::size(200)->generate($nft->payment_method->value); !!}
                                                    </div>
                                                    <a href="" class="btn btn-sm btn-primary mt-2">Paid</a>
                                                </div>
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
