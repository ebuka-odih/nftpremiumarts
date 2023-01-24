@extends('pages.layout.app')
@section('content')

<div class="page-title">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-6">
                <div class="page-title-content">
                    <h3>{{ $nft->name }} Details</h3>
{{--                    <p class="mb-2">Neftify Explore page</p>--}}
                </div>
            </div>
            <div class="col-auto">
                <div class="breadcrumbs"><a href="{{ route('explore') }}">Explore </a><span><i class="ri-arrow-right-s-line"></i></span><a href="#">Payments</a></div>
            </div>
        </div>
    </div>
</div>


<div class="item-single section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="top-bid">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6"><img src="{{ asset('nfts/'.$nft->image) }}" class="img-fluid rounded" alt="..."></div>
                            <div class="col-md-6">
                                <h3 class="mb-3">{{ $nft->name }}</h3>

                                <div class="d-flex justify-content-between mt-4 mb-4">
                                    <div class="text-start">
                                        <h4 class="mb-2">Auction Time</h4>
                                        <h5 class="text-muted">Live<span class="circle bg-success"></span></h5>
                                    </div>
                                    <div class="text-end">
                                        <h4 class="mb-2">Current Bid : <strong class="text-primary">{{ $nft->bid }}</strong></h4>
                                        <h5 class="text-muted">{{ $nft->price }}</h5>
                                    </div>
                                </div>
                                <p class="mb-3">{{ $nft->description  }}
                                </p>

                                <div class="d-flex"><a  class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Buy item</a></div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>

<script>
    new ClipboardJS('.btn');
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection
