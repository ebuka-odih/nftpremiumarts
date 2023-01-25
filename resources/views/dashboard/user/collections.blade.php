@extends('dashboard.layout.app')
@section('content')

    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">

                <div class="nk-block nk-block-lg">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h4 class="nk-block-title">NFT Collections</h4>
                            <p>These are collections of all NFTs purchased </p>
                        </div>
                    </div>
                    <div class="card card-bordered card-preview">
                        <table class="table table-tranx">
                            <thead>
                            <tr class="tb-tnx-head">
                                <th class="tb-tnx-info"> <span class="tb-tnx-desc d-none d-sm-inline-block">
                                    <span>Name</span>
                                    </span> <span class="tb-tnx-date d-md-inline-block d-none">
                                     <span class="d-md-none">Date</span>
                                        <span class="d-none d-md-block">
                                        <span>Issue Date</span>
                                        </span>
		                        </span>
                                </th>
                                <th>Network</th>
                                <th class="tb-tnx-amount is-alt">
                                    <span class="tb-tnx-total">Price</span>
                                    <span class="tb-tnx-status d-none d-md-inline-block">Status</span>
                                </th>
                                <th class="tb-tnx-action"> <span>Item</span> </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($collections as $item)
                            <tr class="tb-tnx-item">
                                <td class="tb-tnx-info">
                                    <div class="tb-tnx-desc">
                                        <span class="title">{{ optional($item->sellnft)->name }}</span>
                                    </div>
                                    <div class="tb-tnx-date">
                                        <span class="date">{{ date('d-m-Y', strtotime($item->created_at)) }}</span>
                                    </div>
                                </td>
                                <td>
                                    {{ $item->sellnft->network }}
                                </td>
                                <td class="tb-tnx-amount is-alt">
                                    <div class="tb-tnx-total">
                                        <span class="amount">{{ $item->sellnft->price }} USD</span>
                                    </div>
                                    <div class="tb-tnx-status">
                                        {!! $item->status() !!}
                                    </div>
                                </td>
                                <td>
                                    <img height="60" width="60" src="{{ asset('nfts/'.$item->sellnft->image) }}" alt="">
                                </td>

                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div><!-- .card-preview -->
                </div>

            </div>
        </div>
    </div>


@endsection
