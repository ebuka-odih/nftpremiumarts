@extends('dashboard.layout.app')
@section('content')
    {{--    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/dashlite2.css') }}">--}}

    <div class="nk-content nk-content-lg nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <p style="font-size: 25px">You can chose to invest in NFT(flipping) and earn ROI(Return On Investment),
                        we take the money to buy and flip NFT and make profit in a short time</p>
                    <br>
                    <div class="container">
                        <div class="card-deck mb-3 text-center">
                            @foreach($plans as $item)
                                <div class="card mb-4 box-shadow">
                                    <div class="card-header">
                                        <h4 class="my-0 font-weight-normal">{{ $item->name }}</h4>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title pricing-card-title">{{ $item->total_return() }}% <small class="text-muted">/ {{ $item->term_days }} Day(s)</small></h3>
                                        <hr>
                                        <ul class="list-group list-group-horizontal">
                                            <li class="list-group-item col-md-6">Min Deposit</li>
                                            <li class="list-group-item col-md-6">${{ $item->min_deposit }}</li>
                                        </ul>
                                        <ul class="list-group list-group-horizontal">
                                            <li class="list-group-item col-md-6">Max Deposit</li>
                                            <li class="list-group-item col-md-6">${{ $item->max_deposit }}</li>
                                        </ul>
                                        <hr>
                                        <ul class="list-group list-group-horizontal">
                                            <li class="list-group-item col-md-6">Daily Interest</li>
                                            <li class="list-group-item col-md-6">{{ $item->daily_interest }}%</li>
                                        </ul>
                                        <ul class="list-group list-group-horizontal">
                                            <li class="list-group-item col-md-6">Plan Interval</li>
                                            <li class="list-group-item col-md-6">{{ $item->term_days }}Day(s)</li>
                                        </ul>
                                        <a href="{{ route('user.invest_detail', $item->id) }}"  class="btn btn-lg btn-block btn-outline-primary">Invest</a>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--    <script src="{{ asset('dashboard/assets/js/bundle.js') }}"></script>--}}
    {{--    <script src="{{ asset('dashboard/assets/js/scripts2.js') }}"></script>--}}
@endsection
