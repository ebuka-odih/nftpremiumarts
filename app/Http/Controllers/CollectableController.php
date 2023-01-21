<?php

namespace App\Http\Controllers;

use App\Collectable;
use Illuminate\Http\Request;

class CollectableController extends Controller
{
    public function collections()
    {
        $collections = Collectable::paginate(10);
        return view('dashboard.user.collections', compact('collections'));
    }
}
