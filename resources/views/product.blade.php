@extends('layouts.app')

@section('content')
    <section class="bg-green-100 py-8">
        <div class="max-w-7xl mx-auto px-4">
            <h1 class="text-3xl font-bold text-blue-600 text-center">Our Products</h1>
            <p class="mt-2 text-gray-600 text-center">Browse our full range of amazing products</p>

            <!-- Filter Form -->
            <form method="GET" action="{{ route('user-products') }}" class="mt-6 flex justify-center">
                <select name="category" onchange="this.form.submit()"
                    class="px-4 py-2 rounded-lg border border-gray-300 shadow-sm focus:ring focus:ring-blue-300">
                    <option value="">All Categories</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $categoryId == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </form>

            <!-- Product Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-8">
                @forelse ($products as $product)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                        <div class="w-full h-48 bg-gray-200">
                            @if ($product->image)
                                <img src="{{ asset('products/' . $product->image) }}" alt="{{ $product->name }}"
                                    class="w-full h-full object-cover">
                            @else
                                <div class="flex items-center justify-center h-full text-gray-400">
                                    No Image
                                </div>
                            @endif
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800">{{ $product->name }}</h3>
                            <p class="text-gray-600">Category: {{ $product->category->name ?? 'N/A' }}</p>
                            <p class="text-gray-600">Available on: {{ $product->onlineShop->name ?? 'N/A' }}</p>
                            <p class="text-gray-500 text-sm mt-2">
                                Created: {{ $product->created_at->format('d M Y') }}
                            </p>
                        </div>
                    </div>
                @empty
                    <p class="col-span-4 text-center text-gray-500">No products found for this category.</p>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-8 flex justify-center">
                {{ $products->appends(['category' => $categoryId])->links() }}
            </div>
        </div>
    </section>
@endsection
