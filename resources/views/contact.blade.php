@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold text-blue-600">Contact Us</h1>
    <form action="#" method="POST" class="mt-6 space-y-4">
        @csrf
        <input type="text" name="name" placeholder="Your Name" class="w-full border p-2 rounded">
        <input type="email" name="email" placeholder="Your Email" class="w-full border p-2 rounded">
        <textarea name="message" placeholder="Your Message" class="w-full border p-2 rounded"></textarea>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Send
        </button>
    </form>
@endsection
