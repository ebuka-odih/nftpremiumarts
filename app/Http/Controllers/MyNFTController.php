<?php

namespace App\Http\Controllers;

use App\MyNFT;
use App\SellNFT;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyNFTController extends Controller
{
    public function buy(Request $request)
    {
        $amount = intval($request->amount);
        if (\auth()->user()->balance <  $amount){
            return redirect()->back()->with('declined', 'Your balance is low to purchase this item');
        }
        $buy = new MyNFT();
        $buy->user_id = Auth::id();
        $buy->sell_n_f_t_s_id = $request->nft_id;
        $buy->status = 1;
        $buy->save();

        $user = User::findOrFail($buy->user_id);
        $user->balance -= intval($buy->sellnft->price);
//        $seller = SellNFT::findOrFail()
        $user->save();

        $owner = User::findOrFail($buy->sellnft->user->id);
        $owner->balance += intval($buy->sellnft->price);
        $owner->save();
        return redirect()->back()->with('success', "Item Purchased Successfully");
    }
}
