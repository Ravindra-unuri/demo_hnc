<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    @vite('resources/css/app.css') {{-- Tailwind CSS --}}
</head>

<body class="bg-gray-100 flex">

    @include('layouts.sidebar')

    {{-- Main Content --}}
    <div class="flex-1 ml-64 p-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">Admins</h2>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded">Logout</button>
            </form>
        </div>

        {{-- Cards --}}

        {{-- <div class="grid grid-cols-12 gap-6"> --}}
        <div class="flex justify-between items-center mb-6">
            <a href="{{ route('admins.create') }}"
                class="px-3 py-1 bg-green-500 text-white rounded hover:bg-green-600 transition">
                + Add New
            </a>
        </div>
        <div class="grid grid-cols-1 gap-6">
            <div class="table-container bg-white p-4 rounded-lg shadow-md">
                <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden">
                    <thead class="bg-gray-100 text-gray-700">
                        <tr>
                            <th class="px-4 py-2 border">ID</th>
                            <th class="px-4 py-2 border">Admin Name</th>
                            <th class="px-4 py-2 border">Email</th>
                            <th class="px-4 py-2 border">Created At</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-800">
                        @foreach ($admins as $admin)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-2 border">{{ $admin->id }}</td>
                                <td class="px-4 py-2 border">{{ $admin->name }}</td>
                                <td class="px-4 py-2 border">{{ $admin->email}}</td>
                                <td class="px-4 py-2 border">{{ $admin->created_at->format('d M Y') }}</td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="mt-4">
                    {{ $admins->links() }}
                </div>
            </div>
        </div>
    </div>
</body>

</html>