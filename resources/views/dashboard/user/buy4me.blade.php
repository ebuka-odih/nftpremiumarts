@extends('dashboard.layout.app')
@section('content')

    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="buysell wide-xs m-auto">

                    <div class="buysell-title text-center">
                        <h2 class="title mb-2">Help me buy NFTs</h2>
                        <p class="text-danger">1. Enter the amount which you want us to use to purchase NFT on your behalf</p>
                        <p class="text-danger">2. Once your request is confirmed the NFT worth your requested amount will be deducted from your account to purchased NFT and transferred to you</p>
                    </div><!-- .buysell-title -->
                    <div class="buysell-block">
                        <form action="{{ route('user.storeBuy4me') }}" class="buysell-form" method="POST">
                            @csrf
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
                            @if(session()->has('declined2'))
                                <div class="alert alert-danger">
                                    {{ session()->get('declined2') }}
                                </div>
                            @endif

                            <div class="buysell-field form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="buysell-amount">Amount to Buy</label>
                                </div>
                                <div class="form-control-group">
                                    <input type="text" class="form-control form-control-lg form-control-number" id="buysell-amount" name="amount" placeholder="100.00">
                                    <div class="form-dropdown">
                                        <div class="text">USD</div>
                                    </div>
                                </div>
                                <div class="form-note-group">
                                    <span class="buysell-min form-note-alt">Minimum: 100.00 USD</span>
                                </div>
                            </div><!-- .buysell-field -->
                            <div class="buysell-field form-action">
                                <button type="submit" class="btn btn-lg btn-block btn-primary" >Continue to Buy</button>
                            </div><!-- .buysell-field -->
                            <div class="form-note text-base text-center">Note: our purchase/transfer fee included, <a href="#">see our fees</a>.</div>
                        </form><!-- .buysell-form -->
                    </div><!-- .buysell-block -->

                    ><!-- .card-preview -->

                </div><!-- .buysell -->
                <div class="card card-bordered card-preview">
                    <table class="table table-tranx">
                        <thead>
                        <tr class="tb-tnx-head">
                            <th class="tb-tnx-info">
                                <span class="tb-tnx-date d-md-inline-block d-none">
                                     <span class="d-md-none">Date</span>
                                        <span class="d-none d-md-block">
                                        <span>Request Date</span>
                                        </span>
		                        </span>
                            </th>
                            <th>Amount</th>
                            <th class="tb-tnx-amount is-alt">
                                <span class="tb-tnx-status d-none d-md-inline-block">Status</span>
                            </th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($buy4me as $item)
                            <tr class="tb-tnx-item">
                                <td class="tb-tnx-info">

                                    <span class="date">{{ date('d-m-Y', strtotime($item->created_at)) }}</span>

                                </td>
                                <td>
                                    <span class="amount">${{ $item->amount }}</span>
                                </td>
                                <td class="tb-tnx-amount is-alt">
                                    <div class="tb-tnx-status">
                                        {!! $item->status() !!}
                                    </div>
                                </td>
                                @if($item->status == 0)
                                <td>
                                    <a href="{{ route('user.cancelBuy4me', $item->id) }}" class="btn btn-sm btn-danger">Cancel</a>
                                </td>
                                @else
                                    <td>
                                        Null
                                    </td>
                                @endif

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>

@endsection
