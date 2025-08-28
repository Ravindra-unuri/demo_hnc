<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white w-full max-w-2xl shadow-lg rounded-2xl p-8">
        <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">➕ Add New Product</h2>

        @if (session('success'))
            <div class="mb-4 p-3 text-green-700 bg-green-100 rounded-lg text-center">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <p style="color:red;font-size:14px;text-align:center;">{{ $errors->first() }}</p>
        @endif
        <!-- enctype added here -->
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf

            <!-- Category -->
            <div>
                <label class="block text-sm font-semibold text-gray-700">Category:</label>
                <select name="product_category_id" required
                    class="mt-1 block w-full p-2 border rounded-lg focus:ring focus:ring-blue-300 focus:outline-none">
                    <option value="">-- Select Category --</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Shop -->
            <div>
                <label class="block text-sm font-semibold text-gray-700">Shop:</label>
                <select name="online_shop_id" required
                    class="mt-1 block w-full p-2 border rounded-lg focus:ring focus:ring-blue-300 focus:outline-none">
                    <option value="">-- Select Shop --</option>
                    @foreach ($shops as $shop)
                        <option value="{{ $shop->id }}">{{ $shop->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Product Name -->
            <div>
                <label class="block text-sm font-semibold text-gray-700">Product Name:</label>
                <input type="text" name="name" required
                    class="mt-1 block w-full p-2 border rounded-lg focus:ring focus:ring-blue-300 focus:outline-none">
            </div>

            <!-- Image Upload -->
            <div>
                <label class="block text-sm font-semibold text-gray-700">Upload Product Image:</label>
                <input type="file" name="image" accept="image/*"
                    class="mt-1 block w-full text-sm text-gray-700 border rounded-lg cursor-pointer focus:outline-none">
                <p class="text-xs text-gray-500 mt-1">Only image files are allowed (JPG, PNG, GIF, etc.)</p>
            </div>

            <!-- Description -->
            <div>
                <label class="block text-sm font-semibold text-gray-700">Description:</label>
                <textarea name="description" rows="4"
                    class="mt-1 block w-full p-2 border rounded-lg focus:ring focus:ring-blue-300 focus:outline-none"></textarea>
            </div>

            <!-- Button -->
            <div class="text-center">
                <button type="submit"
                    class="bg-blue-600 text-white px-6 py-2 rounded-xl shadow hover:bg-blue-700 transition">
                    💾 Save Product
                </button>
            </div>
        </form>
    </div>

</body>

</html>
