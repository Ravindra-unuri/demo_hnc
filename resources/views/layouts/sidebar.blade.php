<div class="h-screen w-64 bg-gray-900 text-white fixed top-0 left-0 flex flex-col">
    <div class="p-4 text-xl font-bold border-b border-gray-700">
        HNC
    </div>
    <nav class="flex-1 p-4 space-y-2">
        <a href="{{ route('dashboard.index') }}" class="flex items-center px-3 py-2 rounded hover:bg-gray-700">
            <!-- Home Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6" />
            </svg>
            Home
        </a>

        <a href="{{ route('subscribers.index') }}" class="flex items-center px-3 py-2 rounded hover:bg-gray-700">
            <!-- Users Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 20h5v-2a4 4 0 00-4-4h-1M9 20H4v-2a4 4 0 014-4h1m0-4a4 4 0 100-8 4 4 0 000 8z" />
            </svg>
            Subscribers
        </a>

        <a href="{{ route('online_shops.index') }}" class="flex items-center px-3 py-2 rounded hover:bg-gray-700">
            <!-- Shopping Cart Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.5 6H19m-12 0a1 1 0 11-2 0 1 1 0 012 0zm12 0a1 1 0 11-2 0 1 1 0 012 0z" />
            </svg>
            Online Shops
        </a>

        <a href="{{ route('product_categories.index') }}" class="flex items-center px-3 py-2 rounded hover:bg-gray-700">
            <!-- Folder Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h4l3 3h10v11H3V7z" />
            </svg>
            Product Categories
        </a>

        <a href="{{ route('products.index') }}" class="flex items-center px-3 py-2 rounded hover:bg-gray-700">
            <!-- Cube Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M20 7l-8-4-8 4v10l8 4 8-4V7z" />
            </svg>
            Products
        </a>

        <a href="{{ route('admins.index') }}" class="flex items-center px-3 py-2 rounded hover:bg-gray-700">
            <!-- Shield Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 12l8-4-8-4-8 4 8 4zm0 0v8" />
            </svg>
            Admins
        </a>
    </nav>
</div>
