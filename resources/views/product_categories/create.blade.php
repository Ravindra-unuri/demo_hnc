<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product Category</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white w-full max-w-lg shadow-lg rounded-2xl p-8">
        <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">📂 Add New Product Category</h2>

        {{-- Success Message --}}
        @if (session('success'))
            <div class="mb-4 p-3 text-green-700 bg-green-100 rounded-lg text-center">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('product_categories.store') }}" method="POST" class="space-y-5">
            @csrf

            {{-- Category Name --}}
            <div>
                <label class="block text-sm font-semibold text-gray-700">Category Name:</label>
                <input type="text" name="name" required
                    class="mt-1 block w-full p-2 border rounded-lg focus:ring focus:ring-blue-300 focus:outline-none"
                    placeholder="Enter category name">
            </div>

            {{-- Save Button --}}
            <div class="text-center">
                <button type="submit"
                    class="bg-blue-600 text-white px-6 py-2 rounded-xl shadow hover:bg-blue-700 transition">
                    💾 Save Category
                </button>
            </div>
        </form>
    </div>

</body>

</html>
