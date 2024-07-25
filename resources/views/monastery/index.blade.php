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
    <div class="mx-auto px-4">
        <h1 class="text-3xl font-bold mb-6 mt-8">Monasteries</h1>
        <div class="mb-4 flex items-center justify-between">
            <a href="{{ route('monasteries.create') }}" class="bg-orange-950 text-white px-4 py-2 rounded hover:bg-orange-800">Add</a>
            {{-- <a href="{{ route('donation.create') }}" class="bg-orange-950 text-white px-4 py-2 rounded hover:bg-orange-800">Donate</a> --}}

            <form action="{{ route('monasteries.index') }}" method="GET" class="flex">
                <input type="text" name="search" value="{{ request()->input('search') }}" placeholder="Search Monastery" class="w-full p-2 border border-orange-800 rounded">
                <button type="submit" class="bg-orange-950 text-white px-4 py-2 rounded ml-2 hover:bg-orange-800">Search</button>
            </form>
        </div>

        <div class="overflow-auto" style="max-height: 500px;overflow-x: scroll;max-width:1200px;">
            <table class="min-w-full bg-white rounded-lg shadow-md">
            <thead class="bg-gray-100 sticky top-0 z-10">
                    <tr class="bg-gray-100">
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
                        <td class="py-2 px-4 border-b">{{ $monasteries->firstItem() + $key }}</td>
                        <td class="py-2 px-4 border-b">{{ $monastery->monasteryName }}</td>
                        <td class="py-2 px-4 border-b">{{ $monastery->monkName }}</td>
                        <td class="py-2 px-4 border-b">{{ $monastery->address }}</td>
                        <td class="py-2 px-4 border-b">{{ $monastery->phNo }}</td>
                        <td class="py-2 px-4 border-b">{{ $monastery->building }}</td>
                        <td class="py-2 px-4 border-b">{{ $monastery->monkNo }}</td>
                        <td class="py-2 px-4 border-b">{{ $monastery->mStatus ? 'Active' : 'Inactive' }}</td>
                        <td class="py-2 px-4 border-b"><img src="{{ $monastery->photo }}" alt="Photo" class="w-16 h-16"></td>
                        <td class="py-2 px-4 border-b flex space-x-2">
                            <a href="{{ route('monasteries.edit', $monastery->id) }}" class="text-yellow-400 flex items-center justify-center w-15 h-20">
                                {{-- <i class="fas fa-edit"></i> --}}
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                                  
                            </a>
                            <form action="{{ route('monasteries.destroy', $monastery->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this monastery?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 flex items-center justify-center w-15 h-20">
                                    {{-- <i class="fas fa-trash"></i> --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                    </svg>
                                      
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @if(request()->input('search'))
            <div class="mt-4">
                <a href="{{ route('monasteries.index') }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Back</a>
            </div>
        @endif

        <div class="mt-4">
            <!-- {{ $monasteries->links() }} -->
            {{ $monasteries->links('vendor.pagination.tailwind') }}
        </div>
    </div>
</x-admin-layout>
