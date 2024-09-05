
<x-admin-layout>
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-6 mt-8">Monasteries</h1>
        @canany(['admin', 'religious'])
            <div class="mb-4 flex items-center justify-between">
                <a href="{{ route('monasteries.create') }}" class="inline-block px-4 py-2
                text-white bg-gradient-to-r from-red-600 to-orange-500 rounded-lg shadow-lg hover:from-red-700 hover:to-orange-600 transform transition-transform duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-600">Add</a>
            
                <form action="{{ route('monasteries.index') }}" method="GET" class="flex items-center space-x-2">
                    <input type="text" name="search" value="{{ request()->input('search') }}" placeholder="Search Monastery" class="w-full p-2 border border-orange-800 rounded">

                    <!-- Dropdown Box for Address -->
                    <select name="address" class="border border-orange-800 rounded h-11">
                        <option value="">Select Address</option>
                        @foreach($addresses as $address)
                            <option value="{{ $address }}" {{ request()->input('address') == $address ? 'selected' : '' }}>
                                {{ $address }}
                            </option>
                        @endforeach
                    </select>

                    <button type="submit" class="inline-block px-4 py-2
                    text-white bg-gradient-to-r from-red-600 to-orange-500 rounded-lg shadow-lg hover:from-red-700 hover:to-orange-600 transform transition-transform duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-600">Search</button>
                </form>
            </div>
            
        @endcanany

        <div class="overflow-auto" style="max-height: 500px;overflow-x: scroll;max-width:1200px;">
            <table class="min-w-full bg-white rounded-lg shadow-md text-center">
            <thead class="bg-gray-100 sticky top-0 z-10">
                    <tr class="bg-gray-100">
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">Monastery Name</th>
                        <th class="py-2 px-4 border-b">Monk Name</th>
                        <th class="py-2 px-4 border-b">Address</th>
                        <th class="py-2 px-4 border-b">Phone Number</th>
                        {{-- <th class="py-2 px-4 border-b">Building</th> --}}
                        <th class="py-2 px-4 border-b">Monk Number</th>
                        <th class="py-2 px-4 border-b">Status</th>
                        <th class="py-2 px-4 border-b">Photo</th>
                        @canany(['admin', 'religious'])
                            <th class="py-2 px-4 border-b">Actions</th>
                        @endcanany
                    </tr>
                </thead>
                <tbody>
                    @foreach($monasteries as $key => $monastery)
                    <tr class="hover:bg-gray-100">
                        <td class="py-2 px-4 border-b">{{ $monasteries->firstItem() + $key }}</td>
                        <td class="py-2 px-4 border-b">{{ $monastery->monasteryName }}</td>
                        <td class="py-2 px-4 border-b">{{ $monastery->monkName }}</td>
                        <td class="py-2 px-4 border-b">{{ $monastery->address }}</td>
                        <td class="py-2 px-4 border-b">{{ $monastery->phNo }}</td>
                        {{-- <td class="py-2 px-4 border-b">{{ $monastery->building }}</td> --}}
                        <td class="py-2 px-4 border-b">{{ $monastery->monkNo }}</td>
                        <td class="py-2 px-4 border-b {{ $monastery->mStatus ? 'text-green-400' : 'text-red-400' }}">{{ $monastery->mStatus ? 'Celeberated' : 'Unceleberated' }}</td>

                        <td class="py-2 px-4 border-b"><img src="{{ $monastery->photo }}" alt="Photo" class="w-16 h-16"></td>
                        
                        @canany(['admin', 'religious'])
                            <td class="py-2 px-4 border-b flex space-x-2">
                                <a href="{{ route('monasteries.edit', $monastery->id) }}" class="text-yellow-400 flex items-center justify-center w-15 h-20">
                                    {{-- <i class="fas fa-edit"></i> --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                    
                                </a>
                                {{-- <form action="{{ route('monasteries.destroy', $monastery->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this monastery?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 flex items-center justify-center w-15 h-20">
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                        </svg>
                                        
                                    </button>
                                </form> --}}
                                <form id="deleteForm" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" onclick="openModal('{{ route('monasteries.destroy', $monastery->id)}}')" class="text-red-600 flex items-center justify-center w-15 h-20">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                        </svg>
                                    </button>
                                </form>
                            </td>
                            
                        @endcanany
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @if(request()->input('search') || request()->input('address'))
            <div class="mt-4">
                <a href="{{ route('monasteries.index') }}" class="inline-block px-4 py-2
                text-white bg-gradient-to-r from-red-600 to-orange-500 rounded-lg shadow-lg hover:from-red-700 hover:to-orange-600 transform transition-transform duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-600">Back</a>
            </div>
        @endif

        <div class="mt-4">
            {{ $monasteries->links('vendor.pagination.tailwind') }}
        </div>
    </div>
     <!-- Modal -->
     <div id="confirmModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <div class="flex flex-col items-center">
                <div class="bg-red-100 p-3 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-12 h-12 text-red-500">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636L5.636 18.364m0-12.728l12.728 12.728" />
                    </svg>
                </div>
                <h2 class="text-xl font-semibold mt-4">Confirm</h2>
            </div>
            <p class="mt-4">Are you sure you want to permanently delete this Monastery data?</p>
            <div class="flex justify-center mt-6">
                <button onclick="closeModal()" class="bg-red-500 text-white px-4 py-2 mr-2 rounded-lg">Cancel</button>
                <button onclick="confirmDelete()" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Yes, Delete!</button>
            </div>
        </div>
    </div>

    <script>
        let deleteActionUrl = '';

        // Open the modal
        function openModal(actionUrl) {
            deleteActionUrl = actionUrl;
            document.getElementById('confirmModal').classList.remove('hidden');
        }

        // Close the modal
        function closeModal() {
            document.getElementById('confirmModal').classList.add('hidden');
        }

        // Confirm delete and submit the form
        function confirmDelete() {
            document.getElementById('deleteForm').action = deleteActionUrl;
            document.getElementById('deleteForm').submit();
        }
    </script>
</x-admin-layout>

