<?php

namespace App\Http\Controllers;

use App\Collectable;
use App\MyNFT;
use Illuminate\Http\Request;

class CollectableController extends Controller
{
    public function collections()
    {
        $collections = MyNFT::whereUserId(auth()->id())->paginate(10);
        return view('dashboard.user.collections', compact('collections'));
    }
}
