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
    <div class="container mx-auto w-3/5 content-center">
        <h1 class="text-3xl text-orange-800 mb-6 mt-12">Add Monastery</h1>
        <form action="{{ route('monasteries.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md mt-12">
            @csrf
            <div class="grid grid-cols-2 gap-4">
                <div class="mb-4">
                    <label class="block text-orange-800 text-lg">Monastery Name:</label>
                    <input type="text" name="monasteryName" class="w-full p-2 border-b-2 border-red-500" value="{{ old('monasteryName') }}">
                    @error('monasteryName')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-orange-800 text-lg">Monk Name:</label>
                    <input type="text" name="monkName" class="w-full p-2 border-b-2 border-red-500" value="{{ old('monkName') }}">
                    @error('monkName')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-orange-800 text-lg">Address:</label>
                    <input type="text" name="address" class="w-full p-2 border-b-2 border-red-500" value="{{ old('address') }}">
                    @error('address')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-orange-800 text-lg">Phone Number:</label>
                    <input type="text" name="phNo" class="w-full p-2 border-b-2 border-red-500" value="{{ old('phNo') }}">
                    @error('phNo')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-orange-800 text-lg">Building:</label>
                    <input type="text" name="building" class="w-full p-2 border-b-2 border-red-500" value="{{ old('building') }}">
                    @error('building')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-orange-800 text-lg">Monk Number:</label>
                    <input type="text" name="monkNo" class="w-full p-2 border-b-2 border-red-500" value="{{ old('monkNo') }}">
                    @error('monkNo')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4 col-span-2">
                    <label class="block text-orange-800 text-lg">Status:</label>
                    <select name="mStatus" class="w-full p-2 border-b-2 border-red-500">
                        <option value="1" {{ old('mStatus') == '1' ? 'selected' : '' }}>Celebrated</option>
                        <option value="0" {{ old('mStatus') == '0' ? 'selected' : '' }}>Unceleberated</option>
                    </select>
                    @error('mStatus')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                {{-- <div class="mb-4 col-span-2">
                    <label class="block text-orange-800 text-lg">Photo:</label>
                    <input type="text" name="photo" class="w-full p-2 border rounded" value="{{ old('photo') }}">
                    @error('photo')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div> --}}
            </div>
            <div class="flex space-x-2 mt-4 justify-end">
                <button type="submit" class="inline-block px-4 py-2
                text-white bg-gradient-to-r from-red-600 to-orange-500 rounded-lg shadow-lg hover:from-red-700 hover:to-orange-600 transform transition-transform duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-600">Add</button>
                <a href="{{ route('monasteries.index') }}" class="bg-orange-800 text-white px-4 py-2 rounded">Back</a>
            </div>
        </form>
    </div>
</x-admin-layout>
