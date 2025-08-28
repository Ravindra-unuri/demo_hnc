<?php

namespace App\Http\Controllers;

use App\Models\OnlineShop;
use Illuminate\Http\Request;

class UsersideOnlineShopController extends Controller
{
    public function index()
    {
        $online_shops = OnlineShop::all();

        return view('onlineshop', compact('online_shops'));
    }
}
