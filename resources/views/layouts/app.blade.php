<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">

    <!-- Header / Navbar -->
    <header class="bg-white shadow fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-xl font-bold text-blue-600">MyCompany</a>
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
    <footer class="bg-gray-800 text-white text-center py-4 mt-10">
        <p>&copy; {{ date('Y') }} MyCompany. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>


</body>

</html>
