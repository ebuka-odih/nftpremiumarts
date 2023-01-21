<?php

namespace App\Http\Controllers;

use App\NFTListing;
use Illuminate\Http\Request;

class NFTListingController extends Controller
{
    public function explore()
    {
        $nfts = NFTListing::all();
        return view('pages.explore', compact('nfts'));
    }

    public function details($id)
    {
        $nft = NFTListing::findOrFail($id);
        return view('pages.details', compact('nft'));
    }
}
