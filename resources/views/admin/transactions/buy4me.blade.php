@extends('admin.layout.app')
@section('content')


    <main id="main-container">

        <!-- Hero -->
        <div class="content">
            <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-start">
                <div>
                    <h1 class="h3 mb-1">
                        All NFT Listed For Sell
                    </h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Full Table -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">

                </div>
                <div class="block-content">

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-vcenter">
                            <thead>
                            <tr>
                                <th class="text-center" >
                                    <i class="far fa-user"></i>
                                </th>
                                <th>User Balance</th>
                                <th style="width: 15%;">Request Amount</th>
                                <th style="width: 15%;">Status</th>
                                <th class="text-center" style="width: 150px;">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($buy4me as $item)
                                <tr>
                                    <td class="text-center">
                                        {{ $item->user->name }}
                                    </td>
                                    <td class="fw-semibold">
                                        $@convert($item->user->balance)
                                    </td>
                                    <td>$@convert($item->amount)</td>
                                    <td>{!! $item->adminStatus() !!}</td>
                                    <td class="text-center">
                                        @if($item->status == 0)
                                            <a href="{{ route('admin.approveBuy4me', $item->id) }}" class="btn btn-sm btn-success mb-2">Approve</a>
                                        @endif
                                        <form method="POST" action="{!! route('admin.collectable.destroy', $item->id) !!}" accept-charset="UTF-8">
                                            <input name="_method" value="DELETE" type="hidden">
                                            {{ csrf_field() }}

                                            <div class="btn-group btn-group-xs pull-right" role="group">
                                                <button data-toggle="tooltip" data-placement="top" type="submit" class="btn  btn-sm btn-danger" onclick="return confirm(&quot;Delete Deposit?&quot;)">
                                                    <span class="fa flaticon-delete" aria-hidden="true"></span>Delete
                                                </button>

                                            </div>

                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END Full Table -->

        </div>

    </main>

@endsection
