<?php

namespace App\Http\Controllers\Admin;

use App\Collectable;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AdminCollectable extends Controller
{
    public function index()
    {
        $collections = Collectable::all();
        return view('admin.user.collections', compact('collections'));
    }

    public function create()
    {
        $users = User::where('admin', 0)->get();
        $collectables = Collectable::all();
        return view('admin.user.add-collectable', compact('users', 'collectables'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'network' => 'required',
            'image' => 'required|image|mimes:jpeg,png,webp,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')){

            $image = $request->file('image');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/collections');
            $image->move($destinationPath, $input['imagename']);

            $nft = new Collectable();
            $nft->name = $request->get('name');
            $nft->price = $request->get('price');
            $nft->network = $request->get('network');
            $nft->user_id = $request->get('user_id');
            $nft->image = $input['imagename'];
            $nft->save();
            return redirect()->route('admin.collectable.index');
        }
        $nft = new Collectable();
        $nft->name = $request->get('name');
        $nft->price = $request->get('price');
        $nft->network = $request->get('network');
        $nft->user_id = $request->get('user_id');
        $nft->save();
        return redirect()->route('admin.collectable.index');
    }


}
