<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>HNCO</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">

    <!-- Header / Navbar -->
    <header class="bg-white shadow fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-xl font-bold text-green-600">HNCO</a>
            <nav class="space-x-6">
                <a href="{{ route('home') }}" class="hover:text-blue-500">Home</a>
                <a href="{{ route('about') }}" class="hover:text-blue-500">About</a>
                <a href="{{ route('user-products') }}" class="hover:text-blue-500">Products</a>
                <a href="{{ route('user-online-shops') }}" class="hover:text-blue-500">Online Shops</a>
                <a href="{{ route('contact') }}" class="hover:text-blue-500">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="pt-20 max-w-7xl mx-auto px-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-green-700 text-white pt-12 pb-6">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-10">

            <!-- Logo & About -->
            <div>
                <div class="flex items-center space-x-2">
                    <img src="/images/logo-light.png" alt="Logo" class="h-12 w-12">
                    <h2 class="text-2xl font-bold">H & C</h2>
                </div>
                <p class="mt-4 text-gray-200 text-sm">
                    One of the widest range of Indian Herbs for Hair, Skin and Health.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="font-bold text-lg mb-3">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:underline">About Us</a></li>
                    <li><a href="#" class="hover:underline">Shop Online</a></li>
                    <li><a href="#" class="hover:underline">Products</a></li>
                    <li><a href="#" class="hover:underline">Contact Us</a></li>
                </ul>
            </div>

            <!-- Head Office -->
            <div>
                <h3 class="font-bold text-lg mb-3">Head Office</h3>
                <p class="text-gray-200 text-sm">
                    Herbs & Crops Private Limited<br>
                    B/56 Sumel-5, Near Chamanpura Circle,<br>
                    Asarwa, Ahmedabad - 380016<br>
                    India
                </p>
                <p class="mt-2 text-sm font-semibold">+91 90816 97971</p>
            </div>

            <!-- Newsletter -->
            <div>
                <h3 class="font-bold text-lg mb-3">Newsletter Subscription</h3>
                <p class="text-gray-200 text-sm mb-3">Subscribe and get latest offers and updates.</p>

                @if (session('success'))
                    <p class="text-green-400 text-sm mb-2">{{ session('success') }}</p>
                @endif

                @if ($errors->any())
                    <p class="text-red-400 text-sm mb-2">{{ $errors->first() }}</p>
                @endif

                <form action="{{ route('subscribe') }}" method="POST" class="flex">
                    @csrf
                    <input type="email" name="email" placeholder="Enter Your Email Address"
                        class="w-full px-3 py-2 rounded-l-lg text-gray-900 focus:outline-none">
                    <button type="submit" class="bg-green-500 px-4 py-2 rounded-r-lg font-semibold">Subscribe</button>
                </form>

                <div class="mt-4 flex space-x-4">
                    <a href="#" class="hover:text-gray-300"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-gray-300"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-gray-300"><i class="fab fa-twitter"></i></a>
                </div>
            </div>

        </div>

        <!-- Bottom -->
        <div class="border-t border-gray-600 mt-10 pt-4 text-center text-sm">
            &copy; {{ date('Y') }} H&C Herbal Ingredients Expert. All Rights Reserved.
        </div>
    </footer>

    <!-- FontAwesome CDN for icons -->
    <script src="https://kit.fontawesome.com/yourkitid.js" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>


</body>

</html>
