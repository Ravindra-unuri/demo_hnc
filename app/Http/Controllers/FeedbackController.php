<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Subscriber;

class FeedbackController extends Controller
{
    public function create()
    {
        $subscribers = Subscriber::all();
        return view('feedbacks.create', compact('subscribers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'subscriber_id' => 'required|exists:subscribers,id',
            'name' => 'required|string|max:255',
            'feedback_desc' => 'required|string',
        ]);

        Feedback::create($request->all());

        return back()->with('success', 'Feedback submitted successfully!');
    }
}
