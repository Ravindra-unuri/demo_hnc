<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class UsersideHomeController extends Controller
{
    public function index()
    {
        $products = Product::with(['category', 'onlineShop'])->limit(3)->get();

        return view('home',  compact('products'));
    }
}
