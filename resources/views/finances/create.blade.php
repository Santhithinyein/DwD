<x-admin-layout>
    
    <div class="container mx-auto px-4 py-8 max-w-md bg-white shadow-md rounded-lg">
        <h1 class="text-2xl font-semibold mb-6 text-gray-800">Add Finance</h1>
        <form action="{{ route('finances.store') }}" method="POST" class="space-y-5">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Department Name</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>
            <div>
                <label for="amount" class="block text-sm font-medium text-gray-700">Amount</label>
                <input type="number" name="amount" id="amount" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>
            {{-- <div class="flex justify-center"> --}}
                <button type="submit" 
            class="inline-block px-4 py-2
                text-white bg-gradient-to-r from-red-600 to-orange-500 rounded-lg shadow-lg hover:from-red-700 hover:to-orange-600 transform transition-transform duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-600">Add</button>
                
            {{-- </div> --}}
        </form>
    </div>

</x-admin-layout>
