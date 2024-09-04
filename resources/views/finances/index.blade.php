<x-admin-layout>
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-2xl font-semibold mb-4">Finance List</h1>
        @canany(['admin', 'management'])
            <div class="flex space-x-2">
                <a href="{{ route('finances.create') }}" 
            class="inline-block px-4 py-2
                    text-white bg-gradient-to-r from-red-600 to-orange-500 rounded-lg shadow-lg hover:from-red-700 hover:to-orange-600 transform transition-transform duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-600">Add Finance</a>
                {{-- <a href="{{ route('finances.create') }}" 
                    class="inline-block px-4 py-2
                            text-white bg-gradient-to-r from-red-600 to-orange-500 rounded-lg shadow-lg hover:from-red-700 hover:to-orange-600 transform transition-transform duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-600">Yearly</a>
                         --}}
           

            </div>
        @endcanany 
        
        <div class="overflow-x-auto mt-2">
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-gray-100 text-left">
                        <th class="py-3 px-4 border-b">No</th>
                        <th class="py-3 px-4 border-b">Department Name</th>
                        <th class="py-3 px-4 border-b">Date</th>
                        <th class="py-3 px-4 border-b">Amount</th>
                       
                        @canany(['admin', 'management'])
                            <th class="py-3 px-4 border-b">Action</th>
                        @endcanany
                    </tr>
                </thead>
                <tbody>
                    @php
                        $counter = 1;
                    @endphp
                    @foreach($finances as $finance)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">{{ $counter++ }}</td>
                        <td class="py-2 px-4">{{ $finance->name }}</td>
                        <td class="py-2 px-4">{{ $finance->created_at->format('d-m-Y') }}</td>
                        <td class="py-2 px-4">{{ $finance->amount }}</td>                        
                        @canany(['admin', 'management'])
                            <td class="py-2 px-4 flex space-x-2">
                                <a href="{{ route('finances.edit', $finance->id) }}" class="text-yellow-500 hover:text-yellow-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                </a>
                                <form action="{{ route('finances.destroy', $finance->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this Department?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700">
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
                <tfoot>
                    <tr class="border-t bg-gray-100">
                        <td colspan="3" class="py-2 px-4 font-semibold text-right">Total</td>
                        <td class="py-2 px-4 font-semibold">{{ number_format($totalAmount, 2) }}</td>
                        @canany(['admin', 'management'])
                            <td></td>
                        @endcanany
                        
                    </tr>
                </tfoot>
                
            </table>
        </div>
    </div>
</x-admin-layout>
