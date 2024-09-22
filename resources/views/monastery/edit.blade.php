{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Monastery</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-yellow-100 p-8">
    
</body>
</html> --}}
<x-admin-layout>
    <div class="container mx-auto w-3/5 content-center">
        <h1 class="text-3xl font-bold mb-6 mt-8">Edit Monastery</h1>
        <form action="{{ route('monasteries.update', $monastery->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md mt-8">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-2 gap-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-lg">Monastery Name:</label>
                    <input type="text" name="monasteryName" value="{{ $monastery->monasteryName }}" class="w-full p-2 border-b-2 border-red-500">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-lg">Monk Name:</label>
                    <input type="text" name="monkName" value="{{ $monastery->monkName }}" class="w-full p-2 border-b-2 border-red-500">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Address:</label>
                    <input type="text" name="address" value="{{ $monastery->address }}" class="w-full p-2 border-b-2 border-red-500">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-lg">Phone Number:</label>
                    <input type="text" name="phNo" value="{{ $monastery->phNo }}" class="w-full p-2 border-b-2 border-red-500">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-lg">Building:</label>
                    <input type="text" name="building" value="{{ $monastery->building }}" class="w-full p-2 border-b-2 border-red-500">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-lg">Monk Number:</label>
                    <input type="text" name="monkNo" value="{{ $monastery->monkNo }}" class="w-full p-2 border-b-2 border-red-500">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-lg border-b-2 border-red-500">Status:</label>
                    <select name="mStatus" class="w-full p-2 border rounded">
                        <option value="1" {{ $monastery->mStatus == 1 ? 'selected' : '' }}>Celebrated</option>
                        <option value="0" {{ $monastery->mStatus == 0 ? 'selected' : '' }}>Uncelebrated</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-lg">Photo:</label>
                    <input type="text" name="photo" value="{{ $monastery->photo }}" class="w-full p-2 border-b-2 border-red-500">
                </div>
            </div>
            <div class="flex space-x-2">
                <button type="submit" class="inline-block px-4 py-2
                text-white bg-gradient-to-r from-red-600 to-orange-500 rounded-lg shadow-lg hover:from-red-700 hover:to-orange-600 transform transition-transform duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-600">Update</button>
                <a href="{{ route('monasteries.index') }}" class="bg-orange-800 text-white px-4 py-2 rounded">Back</a>
            </div>
        </form>
    </div>
</x-admin-layout>
