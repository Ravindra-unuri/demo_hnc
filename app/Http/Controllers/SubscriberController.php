<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function create()
    {
        return view('subscribers.create');
    }

    // Store new subscriber
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:subscribers,email',
        ]);

        Subscriber::create($request->only('name', 'email'));

        return back()->with('success', 'Subscriber added successfully!');
    }

    public function index()
    {
        $subscribers = Subscriber::paginate(10);
        return view('subscribers.index', compact('subscribers'));
    }
}
