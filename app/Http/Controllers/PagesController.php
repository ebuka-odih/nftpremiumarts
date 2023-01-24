<?php

namespace App\Http\Controllers;

use App\Collectable;
use App\NFTListing;
use App\SellNFT;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $nfts = NFTListing::paginate(4);
        return view('pages.index', compact('nfts'));
    }


    public function about()
    {
        return view('pages.about');
    }
    public function contact()
    {
        return view('pages.contact');
    }

    public function collections()
    {
        $collections = SellNFT::all();
        return view('pages.collections', compact('collections'));
    }
    public function details($id)
    {
        $nft = SellNFT::findOrFail($id);
        return view('pages.details', compact('nft'));
    }
}
