<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white w-full max-w-lg shadow-lg rounded-2xl p-8">
        <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">👤 Add New Admin</h2>

        {{-- Success Message --}}
        @if (session('success'))
            <div class="mb-4 p-3 text-green-700 bg-green-100 rounded-lg text-center">
                {{ session('success') }}
            </div>
        @endif

        {{-- Error Message --}}
        @if ($errors->any())
            <div class="mb-4 p-3 text-red-700 bg-red-100 rounded-lg text-center">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('admins.store') }}" method="POST" class="space-y-5">
            @csrf

            {{-- Name --}}
            <div>
                <label class="block text-sm font-semibold text-gray-700">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" required
                    class="mt-1 block w-full p-2 border rounded-lg focus:ring focus:ring-blue-300 focus:outline-none"
                    placeholder="Enter full name">
            </div>

            {{-- Email --}}
            <div>
                <label class="block text-sm font-semibold text-gray-700">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required
                    class="mt-1 block w-full p-2 border rounded-lg focus:ring focus:ring-blue-300 focus:outline-none"
                    placeholder="Enter email address">
            </div>

            {{-- Password --}}
            <div>
                <label class="block text-sm font-semibold text-gray-700">Password</label>
                <input type="password" name="password" required
                    class="mt-1 block w-full p-2 border rounded-lg focus:ring focus:ring-blue-300 focus:outline-none"
                    placeholder="Enter password">
            </div>

            {{-- Confirm Password --}}
            <div>
                <label class="block text-sm font-semibold text-gray-700">Confirm Password</label>
                <input type="password" name="password_confirmation" required
                    class="mt-1 block w-full p-2 border rounded-lg focus:ring focus:ring-blue-300 focus:outline-none"
                    placeholder="Confirm password">
            </div>

            {{-- Submit Button --}}
            <div class="text-center">
                <button type="submit"
                    class="bg-blue-600 text-white px-6 py-2 rounded-xl shadow hover:bg-blue-700 transition">
                    💾 Save Admin
                </button>
            </div>
        </form>
    </div>

</body>

</html>
