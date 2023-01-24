<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ApprovedUploadedNFT;
use App\SellNFT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminSellController extends Controller
{
    public function list()
    {
        $nfts = SellNFT::all();
        return view('admin.transactions.list-nft', compact('nfts'));
    }

    public function approve($id)
    {
        $nft = SellNFT::findOrFail($id);
        $nft->status = 1;
        $nft->save();
        Mail::to($nft->user->email)->send(new ApprovedUploadedNFT($nft));
        return redirect()->back();
    }


}
