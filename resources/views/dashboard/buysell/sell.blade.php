@extends('dashboard.layout.app')
@section('content')

    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="buysell wide-xs m-auto">
                    <div class="buysell-nav text-center">
                        <ul class="nk-nav nav nav-tabs nav-tabs-s2">
                            <li class="nav-item current-page">
                                <a class="nav-link" href="{{ route('user.buy') }}">Buy NFT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('user.sell') }}">Sell NFT</a>
                            </li>
                        </ul>
                        <br>
                    </div><!-- .buysell-nav -->
                    <div class="buysell-title text-center">
                        <h4 class="title mb-3">Upload Your NFT To NFTPrimearts Marketplace</h4>
                    </div>
                    <hr>
                    <form action="{{ route('user.uploadNFT') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
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

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Name</label>
                                <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">Network</label>
                                <select name="network" id="inputState" class="form-control">
                                    <option selected>Choose Network</option>
                                    <option value="Ethereum">Ethereum</option>
                                    <option value="Solana">Solana</option>
                                    <option value="BNB">Binance Chain (BNB)</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Price (In USD)</label>
                            <input type="number" name="price" class="form-control" id="inputAddress" >
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">File</label>
                            <input type="file" name="image" class="form-control-file" id="inputAddress2" >
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Description</label>
                            <textarea class="form-control" name="description" id="" cols="20" rows="10"></textarea>
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div><!-- .buysell -->


            </div>
        </div>
    </div>


@endsection
