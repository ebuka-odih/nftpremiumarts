@extends('dashboard.layout.app')
@section('content')

    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">

                <div class="nk-block nk-block-lg">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h4 class="nk-block-title">My NFT Uploads</h4>
                            <p>List of all your uploaded NFTs for sale</p>
                        </div>
                    </div>
                    <div class="card card-bordered card-preview">

                       <div class="table-responsive">
                           <table class="table">
                               <thead class="thead-dark">
                               <tr>
                                   <th scope="col">#</th>
                                   <th scope="col">Date</th>
                                   <th scope="col">Name</th>
                                   <th scope="col">Price</th>
                                   <th scope="col">Status</th>
                                   <th scope="col">Image</th>
                               </tr>
                               </thead>
                               <tbody>
                               @foreach($myuploads as $item)
                                   <tr>
                                       <th>{!! $item->itemId() !!}</th>
                                       <td>{{ date('Y-m-d', strtotime($item->created_at)) }}</td>
                                       <td>{{ $item->name }}</td>
                                       <td>{{ $item->price }}</td>
                                       <td>{!! $item->status() !!}</td>
                                       <td>
                                           <img height="60" width="60" src="{{ asset('nfts/'.$item->image) }}" alt="">
                                       </td>

                                   </tr>
                               @endforeach
                               </tbody>
                           </table>
                       </div>
                        <br>


                    </div><!-- .card-preview -->
                </div>

            </div>
        </div>
    </div>


@endsection
