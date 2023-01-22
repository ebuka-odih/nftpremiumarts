@extends('pages.layout.app')
@section('content')

    <div class="page-title">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-6">
                    <div class="page-title-content">
                        <h3>Marketplace</h3>
                        <p class="mb-2">Opennest Collections</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="collections section-padding">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="filter-tab">
                        <div class="row">
                            @foreach($collections as $item)
                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="card items">
                                        <div class="card-body">
                                            <div class="items-img position-relative">
                                                <img src="{{ asset('nfts/'.$item->image) }}" class="img-fluid rounded mb-3" alt="">
                                                {{--                                        <img src="images/avatar/17.html" class="creator" width="50" alt="">--}}
                                            </div>
                                            <a href="{{ route('details', $item->id) }}">
                                                <h4 class="card-title">{{ $item->name }}</h4>
                                            </a>
                                            <div class="d-flex justify-content-between">
                                                <div class="text-start">
                                                    <p class="mb-2">Auction</p>
                                                    <h5 class="text-success">Live </h5>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-2">Bid : <strong class="text-primary">{{ $item->bid }}</strong></p>
                                                    <h5 class="text-muted">{{ $item->price }}</h5>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center mt-3">
                                                <a href="{{ route('details', $item->id) }}" class="btn btn-primary">Place a Bid</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
