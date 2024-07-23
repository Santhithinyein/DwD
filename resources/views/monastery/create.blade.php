{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Monastery</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-yellow-100 p-8">
    
</body>
</html> --}}
<x-admin-layout>
    <div class="container mx-auto w-2/5 content-center">
        <h1 class="text-2xl font-bold mb-6">Add Monastery</h1>
        <form action="{{ route('monasteries.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700">Monastery Name:</label>
                <input type="text" name="monasteryName" class="w-full p-2 border rounded">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Monk Name:</label>
                <input type="text" name="monkName" class="w-full p-2 border rounded">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Address:</label>
                <input type="text" name="address" class="w-full p-2 border rounded">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Phone Number:</label>
                <input type="text" name="phNo" class="w-full p-2 border rounded">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Building:</label>
                <input type="text" name="building" class="w-full p-2 border rounded">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Monk Number:</label>
                <input type="text" name="monkNo" class="w-full p-2 border rounded">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Status:</label>
                <select name="mStatus" class="w-full p-2 border rounded">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Photo:</label>
                <input type="text" name="photo" class="w-full p-2 border rounded">
            </div>
            <div class="flex space-x-2">
                <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Add</button>
                <a href="{{ route('monasteries.index') }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Back</a>
            </div>
        </form>
    </div>
</x-admin-layout>
