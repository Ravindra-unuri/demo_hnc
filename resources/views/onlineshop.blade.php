@extends('layouts.app')

@section('content')
    <section class="bg-green-100 py-8">
        <div class="max-w-7xl mx-auto px-4">
            <h1 class="text-3xl font-bold text-blue-600 text-center">We are available on</h1>
            <p class="mt-2 text-gray-600 text-center">Browse our full range of amazing products</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-8">
                @forelse ($online_shops as $online_shop)
                    <a href="{{ $online_shop->link }}">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                            <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                                @if ($online_shop->image)
                                    <img src="{{ asset('onlineShops/' . $online_shop->image) }}"
                                        alt="{{ $online_shop->name }}" class="w-24 h-24 object-cover rounded-full">
                                @else
                                    <div class="flex items-center justify-center h-full text-gray-400">
                                        No Image
                                    </div>
                                @endif
                            </div>

                            <div class="p-4">
                                <h3 class="text-lg font-semibold text-gray-800">{{ $online_shop->name }}</h3>
                            </div>
                        </div>
                    </a>
                @empty
                    <p>No shops found.</p>
                @endforelse
            </div>

        </div>
    </section>
@endsection
