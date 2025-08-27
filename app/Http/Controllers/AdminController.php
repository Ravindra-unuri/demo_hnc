<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create()
    {
        return view('admins.create');
    }

    // Store new subscriber
    public function store(Request $request)
    {
        $request->validate([
            'name'              => 'required|string|max:255',
            'email'             => 'required|email|unique:users,email',
            'password'          => 'required|min:6|confirmed', // confirmed = matches confirm_password
        ]);

        // Create user with hashed password
        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return back()->with('success', 'Admin added successfully!');
    }


    public function index()
    {
        $admins = User::paginate(10);
        return view('admins.index', compact('admins'));
    }
}
