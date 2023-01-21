@extends('dashboard.layout.app')
@section('content')

    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="buysell wide-xs m-auto">
                    <div class="buysell-title text-center">
                        <h4 class="title mb-3">Upload Your NFTs </h4>
                        <hr>
                        <div class="card card-preview">
                            <div class="card-inner">
                                <form action="{{ route('user.uploadNFT') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @if(session()->has('rejected'))
                                        <div class="alert alert-danger">
                                            {{ session()->get('rejected') }}
                                        </div>
                                    @endif
                                    @if(session()->has('success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success') }}
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
                                                <label class="form-label">Name</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" name="name" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-label">Price</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" name="price" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-label">Network</label>
                                                <div class="form-control-wrap">
                                                    <select name="network" id="" class="form-control">
                                                        <option disabled selected>Select Network</option>
                                                        <option value="ETH">Ethereum</option>
                                                        <option value="SOL">Solana</option>
                                                        <option value="BNB">Binance Coin</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <label class="form-label">Image</label>
                                            <input type="file"  name="image" class="form-control-file">
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-label">Description</label>
                                                <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
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

@endsection
