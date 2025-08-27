{{-- <!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, {{ Auth::user()->name }}</h2>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    @vite('resources/css/app.css') {{-- Tailwind CSS --}}
</head>
<body class="bg-gray-100 flex">

    {{-- Sidebar --}}
    @include('layouts.sidebar')

    {{-- Main Content --}}
    <div class="flex-1 ml-64 p-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">Welcome, {{ Auth::user()->name }}</h2>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded">Logout</button>
            </form>
        </div>

        {{-- Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg font-semibold">Subscribers</h3>
                <p class="text-3xl font-bold">{{ $counts['subscribers'] }}</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg font-semibold">Online Shops</h3>
                <p class="text-3xl font-bold">{{ $counts['online_shops'] }}</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg font-semibold">Categories</h3>
                <p class="text-3xl font-bold">{{ $counts['categories'] }}</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg font-semibold">Products</h3>
                <p class="text-3xl font-bold">{{ $counts['products'] }}</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg font-semibold">Feedbacks</h3>
                <p class="text-3xl font-bold">{{ $counts['feedbacks'] }}</p>
            </div>
        </div>
    </div>
</body>
</html>

