<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Subscriber;
use App\Models\OnlineShop;
use App\Models\ProductCategory;
use App\Models\Product;
use App\Models\Feedback;

class AuthController extends Controller
{
    // Show login form
    public function showLogin()
    {
        return view('auth.login');
    }

    // Handle login form
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid email or password.',
        ]);
    }

    // Show dashboard
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

    // Handle logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
