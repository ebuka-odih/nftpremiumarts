<?php

namespace App\Http\Controllers;

use App\Mint;
use App\NFTListing;
use App\SellNFT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class BuyNFTController extends Controller
{
    public function buy()
    {
        $nfts = SellNFT::all();
        return view('dashboard.buysell.buy', compact('nfts'));
    }

    public function details($id)
    {
        $nft = SellNFT::findOrFail($id);
        return view('dashboard.buysell.details', compact('nft'));
    }


}
