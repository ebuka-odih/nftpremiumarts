<?php

namespace App\Http\Controllers;

use App\MyNFT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyNFTController extends Controller
{
    public function buy(Request $request)
    {
        if (\auth()->user()->balance < intval($request->amount) ){
            return redirect()->back()->with('declined', 'Your balance is low to purchase this item');
        }
        $buy = new MyNFT();
        $buy->user_id = Auth::id();
        $buy->sell_n_f_t_s_id = $request->nft_id;
        $buy->status = 1;
        $buy->save();
        return redirect()->back()->with('success', "Item Purchased Successfully");
    }
}
