<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Models\OnlineShop;
use App\Models\ProductCategory;
use App\Models\Product;
use App\Models\Feedback;

class DashboardController extends Controller
{
    public function index()
    {
        $counts = [
            'subscribers' => Subscriber::count(),
            'online_shops' => OnlineShop::count(),
            'categories' => ProductCategory::count(),
            'products' => Product::count(),
            'feedbacks' => Feedback::count(),
        ];

        return view('dashboard', compact('counts'));
    }
}
