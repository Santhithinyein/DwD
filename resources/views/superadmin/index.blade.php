<x-admin-layout>
    <div class="container mx-auto mt-5 p-4">
        <h1 class="text-2xl font-bold mb-6">Main Admin - Admin List</h1>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex space-x-4 mb-4">
            <a href="{{ route('superadmin.create') }}" class="inline-block px-4 py-2
            text-white bg-gradient-to-r from-red-600 to-orange-500 rounded-lg shadow-lg hover:from-red-700 hover:to-orange-600 transform transition-transform duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-600">Add User</a>
            {{-- <a href="{{ route('finances.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Finance</a> --}}
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID No</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Admin Type</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @php
                        $idNo = 1; // Initialize the ID No counter
                    @endphp
                   
                    @foreach($users as $user)
                        @if($user->userType->id > 2)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $idNo }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $user->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $user->userType->type }}</td>
                                <td class="py-4 px-6  flex space-x-2">
                                    <a href="{{ route('superadmin.edit', $user->id) }}" class="text-yellow-500 hover:text-yellow-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                        </svg>
                                    </a>
                                    {{-- <form action="{{ route('superadmin.destroy', $user->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this admin?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-600 ml-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                            </svg>
                                        </button>
                                    </form> --}}
                                    <form id="deleteForm" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" onclick="openModal('{{ route('superadmin.destroy', $user->id)}}')" class="text-red-500 hover:text-red-600 ml-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @php
                                $idNo++; // Increment the ID No counter only for valid rows
                            @endphp
                        @endif
                    @endforeach
                </tbody>
            </table>
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
            <p class="mt-4">Are you sure you want to permanently delete this admin?</p>
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
