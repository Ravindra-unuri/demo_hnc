@extends('layouts.app')

@section('content')
    <section class="w-full">
        <div x-data="{
            active: 0,
            images: ['{{ asset('images/home1.png') }}', '{{ asset('images/home2.png') }}', '{{ asset('images/home3.png') }}']
        }" x-init="setInterval(() => { active = (active + 1) % images.length }, 6000)" class="relative h-[500px] overflow-hidden">

            <!-- Slides -->
            <template x-for="(image, index) in images" :key="index">
                <div x-show="active === index" x-transition:enter="transition-opacity duration-1000 ease-in-out"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="transition-opacity duration-1000 ease-in-out" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0" class="absolute inset-0">
                    <img :src="image" class="w-full h-full object-cover" alt="Company">
                </div>
            </template>

            <!-- Navigation dots -->
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <template x-for="(image, index) in images" :key="index">
                    <button @click="active = index" :class="active === index ? 'bg-blue-600' : 'bg-gray-400'"
                        class="w-3 h-3 rounded-full transition-colors">
                    </button>
                </template>
            </div>
        </div>
    </section>

    <br>
    <section class="bg-green-100">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div>
                <img src="/images/home1_1.png" alt="About" class="rounded-lg shadow-lg w-full h-100 object-cover">
            </div>
            <div>
                <h2 class="text-3xl font-bold text-gray-800">Wide Range of Ayurvedic Herbs</h2>
                <p class="mt-4 text-gray-600">
                    Our great range and worldwide availability make us.
                </p>
                <p class="mt-4 text-gray-600">
                    "HERBAL INGREDIENTS EXPERT”.
                    We comply with major international standards and certificates.
                </p>
                <ul class="mt-4 space-y-2 text-gray-700">
                    <li>✔ GMP (Good Manufacturing Practice)</li>
                    <li>✔ Kosher (from KLBD)</li>
                    <li>✔ Halal (from Halal India)</li>
                    <li>✔ FSSAI (Food Safety Standards Authority of India)</li>
                    <li>✔ Vegetarian </li>
                </ul><br><br>
                <a href="#">
                    <button
                        class="px-6 py-3 bg-green-600 text-white font-semibold rounded-lg shadow hover:bg-green-700 transition">
                        BROWSE OUR PRODUCTS
                    </button>
                </a>
            </div>
        </div>
    </section>

    <br><br>
    <section class="bg-green-100 py-8">
        <div class="max-w-6xl mx-auto px-4">
            <!-- Product Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach ($products as $product)
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
                            <p class="text-gray-500 text-sm mt-2">Created: {{ $product->created_at->format('d M Y') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Explore More Button -->
            <div class="mt-8 text-center">
                <a href="{{ route('products.index') }}"
                    class="px-6 py-3 bg-green-600 text-white rounded-lg shadow hover:bg-green-700 transition">
                    Explore More Products
                </a>
            </div>
        </div>
    </section>
@endsection
