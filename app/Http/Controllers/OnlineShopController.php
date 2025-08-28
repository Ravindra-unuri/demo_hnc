<?php

namespace App\Http\Controllers;

use App\Models\OnlineShop;
use Illuminate\Http\Request;

class OnlineShopController extends Controller
{
    public function create()
    {
        return view('online_shops.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|max:8192',
            'link' => 'required|url'
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            // Create products folder if not exists
            $destinationPath = public_path('onlineShops');
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
        }

        OnlineShop::create([
            'name' => $request->name,
            'image' => $imageName,
            'link' => $request->link
        ]);

        return back()->with('success', 'Online Shop added successfully!');
    }

    public function index()
    {
        $onlineShops = OnlineShop::paginate(10); // pagination
        return view('online_shops.index', compact('onlineShops'));
    }
}
