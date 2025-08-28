<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Online Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white w-full max-w-lg shadow-lg rounded-2xl p-8">
        <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">🏬 Add New Online Shop</h2>

        {{-- Success Message --}}
        @if (session('success'))
            <div class="mb-4 p-3 text-green-700 bg-green-100 rounded-lg text-center">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <p style="color:red;font-size:14px;text-align:center;">{{ $errors->first() }}</p>
        @endif

        <form action="{{ route('online_shops.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf
            {{-- Shop Name --}}
            <div>
                <label class="block text-sm font-semibold text-gray-700">Shop Name:</label>
                <input type="text" name="name" required
                    class="mt-1 block w-full p-2 border rounded-lg focus:ring focus:ring-blue-300 focus:outline-none"
                    placeholder="Enter shop name">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700">Upload Image:</label>
                <input type="file" name="image" accept="image/*"
                    class="mt-1 block w-full text-sm text-gray-700 border rounded-lg cursor-pointer focus:outline-none">
                <p class="text-xs text-gray-500 mt-1">Only image files are allowed (JPG, PNG, GIF, etc.)</p>
            </div>

            {{-- Shop Link --}}
            <div>
                <label class="block text-sm font-semibold text-gray-700">Shop Link:</label>
                <input type="url" name="link" required
                    class="mt-1 block w-full p-2 border rounded-lg focus:ring focus:ring-blue-300 focus:outline-none"
                    placeholder="https://example.com">
            </div>

            {{-- Save Button --}}
            <div class="text-center">
                <button type="submit"
                    class="bg-blue-600 text-white px-6 py-2 rounded-xl shadow hover:bg-blue-700 transition">
                    💾 Save Shop
                </button>
            </div>
        </form>
    </div>

</body>

</html>
