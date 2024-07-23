{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monasteries</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-yellow-100 p-8">
    
</body>
</html> --}}

<x-admin-layout>
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-6">Monasteries</h1>
        <div class="mb-4 flex items-center justify-between">
            <a href="{{ route('monasteries.create') }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Add</a>
            <form action="{{ route('monasteries.index') }}" method="GET" class="flex">
                <input type="text" name="search" value="{{ request()->input('search') }}" placeholder="Search Monastery" class="w-full p-2 border rounded">
                <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded ml-2">Search</button>
            </form>
        </div>
        <table class="min-w-full bg-white rounded-lg shadow-md">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Monastery Name</th>
                    <th class="py-2 px-4 border-b">Monk Name</th>
                    <th class="py-2 px-4 border-b">Address</th>
                    <th class="py-2 px-4 border-b">Phone Number</th>
                    <th class="py-2 px-4 border-b">Building</th>
                    <th class="py-2 px-4 border-b">Monk Number</th>
                    <th class="py-2 px-4 border-b">Status</th>
                    <th class="py-2 px-4 border-b">Photo</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach($monasteries as $key => $monastery)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $key + 1 }}</td>
                    <td class="py-2 px-4 border-b">{{ $monastery->monasteryName }}</td>
                    <td class="py-2 px-4 border-b">{{ $monastery->monkName }}</td>
                    <td class="py-2 px-4 border-b">{{ $monastery->address }}</td>
                    <td class="py-2 px-4 border-b">{{ $monastery->phNo }}</td>
                    <td class="py-2 px-4 border-b">{{ $monastery->building }}</td>
                    <td class="py-2 px-4 border-b">{{ $monastery->monkNo }}</td>
                    <td class="py-2 px-4 border-b">{{ $monastery->mStatus ? 'Active' : 'Inactive' }}</td>
                    <td class="py-2 px-4 border-b">{{ $monastery->photo }}</td>
                    <td class="py-2 px-4 border-b flex space-x-2">
                        <a href="{{ route('monasteries.edit', $monastery->id) }}" class="text-yellow-400 flex items-center justify-center w-15 h-20"><i class="fas fa-edit"></i></a>
                        <form action="{{ route('monasteries.destroy', $monastery->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this monastery?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 flex items-center justify-center w-15 h-20"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
         @if(request()->input('search'))
            <div class="mt-4">
                <a href="{{ route('monasteries.index') }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Back</a>
            </div>
        @endif
    </div>
</x-admin-layout>
