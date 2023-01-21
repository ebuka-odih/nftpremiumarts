<?php

namespace App\Http\Controllers\Admin;

use App\Buy4Me;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AdminBuy4Me extends Controller
{
    public function buy4me()
    {
        $buy4me = Buy4Me::all();
        return view('admin.transactions.buy4me', compact('buy4me'));
    }

    public function approveBuy4me($id)
    {
        $buy4me = Buy4Me::findOrFail($id);
        $user   = User::findOrFail($buy4me->user_id);
        $user->balance -= $buy4me->amount;
        $user->save();
        $buy4me->status = 1;
        $buy4me->save();
        return redirect()->back();
    }
}
