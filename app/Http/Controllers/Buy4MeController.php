<?php

namespace App\Http\Controllers;

use App\Buy4Me;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Buy4MeController extends Controller
{
    public function buy4me()
    {
        $buy4me = Buy4Me::whereUserId(\auth()->id())->paginate(10);
        return view('dashboard.user.buy4me', compact('buy4me'));
    }

    public function storeBuy4me(Request $request)
    {
        $request->validate([
            'amount' => 'required',
        ]);
        $buy4me = new Buy4Me();
        if ($request->amount < \auth()->user()->balance){
            if ($request->amount > 100){
                $buy4me->amount = $request->amount;
                $buy4me->user_id = Auth::id();
                $buy4me->save();
                return redirect()->back()->with('success', "Request sent successfully");
            }
            return redirect()->back()->with('declined2', "You can only make a request from $100 and above");

        }
         return redirect()->back()->with('declined', "Insufficient Balance");


    }

    public function cancelBuy4me($id)
    {
        $buy4me = Buy4Me::findOrFail($id);
        $buy4me->status = -1;
        $buy4me->save();
        return view('dashboard.user.cancel-buy4me', compact('deposit'));
    }

}
