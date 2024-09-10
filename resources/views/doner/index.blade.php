<x-admin-layout>
    @if (Session::has('success'))
    <div class="fixed inset-0 flex items-center justify-center z-50">
        <div class="w-60 bg-[#e85d04] border border-[#502112] text-white  px-4 py-3 rounded relative max-w-sm mx-auto" role="alert">
            <strong class="font-bold">Send Successfully!</strong>
            {{-- <span class="block sm:inline">{{ Session::get('success') }}</span> --}}
            <button type="button" class="absolute top-0 right-0 px-4 py-3" onclick="this.parentElement.parentElement.style.display='none';">
                <svg class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M14.348 5.652a1 1 0 00-1.414-1.414L10 7.172 7.066 4.238a1 1 0 10-1.414 1.414L8.586 10l-2.934 2.934a1 1 0 001.414 1.414L10 12.828l2.934 2.934a1 1 0 001.414-1.414L11.414 10l2.934-2.934z"/></svg>
            </button>
        </div>
    </div>
    @endif
    {{-- <h1 class="text-3xl py-2 px-2 font-semibold">Donors</h1> --}}
    
    <div class="max-w-full mx-auto bg-white bg-opacity-50 p-4 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold mb-5">Donors List</h2>
            
        {{-- @canany(['admin', 'religious'])
            <div class="flex justify-between items-center mb-4">
                
                <div class="mx-2">
                    <form action="{{route('doners.filter')}}" method="post">
                        @csrf
                        <label for="" class="font-semibold">Start Date</label>
                        <input type="date" name="start_date" id="" class="py-2 rounded-lg border" value="{{request()->input('start_date')}}">
                        <label for="" class="font-semibold" >End Date</label>
                        <input type="date" name="end_date" id="" class="py-2 rounded-lg border" value="{{request()->input('end_date')}}">
                        <button type="submit" class="inline-block px-4 py-2
                        text-white bg-gradient-to-r from-red-600 to-orange-500 rounded-lg shadow-lg hover:from-red-700 hover:to-orange-600 transform transition-transform duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-600">Filter</button>
                    </form>
                </div>
                <div class="mx-2 ml-auto">
                    <form action="{{route('doners.search')}}" method="post">
                        @csrf
                        <input type="text" name="search" class="py-2 rounded-lg pl-3 border" placeholder="Search Doners" value="{{request()->input('search')}}">
                        <button type="submit" class="inline-block px-4 py-2
                        text-white bg-gradient-to-r from-red-600 to-orange-500 rounded-lg shadow-lg hover:from-red-700 hover:to-orange-600 transform transition-transform duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-600">Search</button>
                    </form>
                </div>
                <div class="py-2 mr-2">
                    <a href="{{route('doners')}}" class="inline-block px-4 py-2
                    text-white bg-gradient-to-r from-red-600 to-orange-500 rounded-lg shadow-lg hover:from-red-700 hover:to-orange-600 transform transition-transform duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-600">Refresh</a>
                </div>
                <div class="py-2">
                    <a href="{{route('doners.export')}}" class="inline-block px-4 py-2
                    text-white bg-gradient-to-r from-red-600 to-orange-500 rounded-lg shadow-lg hover:from-red-700 hover:to-orange-600 transform transition-transform duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-600">Excel Export</a>
                </div>
            </div>
            
        @endcanany --}}
        @canany(['admin', 'religious'])
        <div class="flex justify-between items-center mb-4">
            {{-- <h2 class="text-lg font-semibold">Donors List</h2> --}}

            <div class="mx-2">
                <form action="{{route('doners.index')}}" method="get">
                    @csrf
                    <label for="" class="font-semibold">Start Date</label>
                    <input type="date" name="start_date" id="" class="py-2 rounded-lg border" value="{{request()->input('start_date')}}">
                    <label for="" class="font-semibold" >End Date</label>
                    <input type="date" name="end_date" id="" class="py-2 rounded-lg border" value="{{request()->input('end_date')}}">
                    <button type="submit" name="action" value="filter" class="inline-block px-4 py-2
                    text-white bg-gradient-to-r from-red-600 to-orange-500 rounded-lg shadow-lg hover:from-red-700 hover:to-orange-600 transform transition-transform duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-600">Filter</button>

                    {{-- <div class="mx-2 ml-auto"> --}}
                
                        <input type="text" name="search" class="py-2 rounded-lg pl-3 border" placeholder="Search Doners" value="{{request()->input('search')}}">
                        <button type="submit" name="action" value="search" class="inline-block px-4 py-2
                        text-white bg-gradient-to-r from-red-600 to-orange-500 rounded-lg shadow-lg hover:from-red-700 hover:to-orange-600 transform transition-transform duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-600">Search</button>
                    
                    {{-- </div> --}}
                </form>
            </div>
           
            <div class="py-2 mr-2">
                <a href="{{route('doners')}}" class="inline-block px-4 py-2
                text-white bg-gradient-to-r from-red-600 to-orange-500 rounded-lg shadow-lg hover:from-red-700 hover:to-orange-600 transform transition-transform duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-600">Refresh</a>
            </div>
            <div class="py-2">
                <a href="{{route('doners.export')}}" class="inline-block px-4 py-2
                text-white bg-gradient-to-r from-red-600 to-orange-500 rounded-lg shadow-lg hover:from-red-700 hover:to-orange-600 transform transition-transform duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-600">Excel Export</a>
            </div>
        </div>
        
    @endcanany
        
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-2 px-4 border-b">No</th>
                        <th class="py-2 px-4 border-b">Date</th>
                        <th class="py-2 px-4 border-b">Name</th>
                        <th class="py-2 px-4 border-b">Email</th>
                        <th class="py-2 px-4 border-b">Amount</th>
                        @canany(['admin', 'religious'])
                        <th class="py-2 px-4 border-b">E-Receipt</th>
                        <th class="py-2 px-4 border-b">Action</th>                            
                        @endcanany
                    </tr>
                </thead>
                <tbody>
                    @foreach ($doners as $key => $doner)
                    
                        <tr class="hover:bg-gray-100 text-center">
                            <td class="py-2 px-4 border-b">{{ $doners->firstItem() + $key }}</td>
                            <td class="py-2 px-4 border-b">{{ $doner->created_at->format('d-m-Y') }}</td>
                            <td class="py-2 px-4 border-b">{{ $doner->user->name }}</td>
                            <td class="py-2 px-4 border-b">{{ $doner->user->email }}</td>
                            <td class="py-2 px-4 border-b">{{ $doner->amount }}</td>
                            @canany(['admin', 'religious'])
                                <td class="py-2 px-4 border-b">
                                    <!-- Button to trigger modal -->
                                    <button onclick="showImageModal('{{ asset('storage/' . $doner->receivePhoto) }}')" class="inline-block px-4 py-2
                                        text-white bg-gradient-to-r from-red-600 to-orange-500 rounded-lg shadow-lg hover:from-red-700 hover:to-orange-600 transform transition-transform duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-600 text-sm">View</button>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm border-b">
                                    <form action="{{ route('mail', $doner->user_id) }}" method="post">
                                       
                                        @csrf
                                       
                                        <button class="inline-block px-4 py-2
                                        text-white bg-gradient-to-r from-red-600 to-orange-500 rounded-lg shadow-lg hover:from-red-700 hover:to-orange-600 transform transition-transform duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-600 text-sm">Send Mail</button>
                                    </form>
                                </td>
                                
                            @endcanany
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal -->
    <div id="imageModal" class="hidden fixed z-50 inset-0 bg-black bg-opacity-50 flex items-center justify-center overflow-auto">
        <div class="bg-white p-4 rounded-lg">
            <img id="modalImage" src="" alt="E-Receipt" class="max-w-full h-svh">
            <button onclick="closeImageModal()" class="inline-block px-4 py-2
            text-white bg-gradient-to-r from-red-600 to-orange-500 rounded-lg shadow-lg hover:from-red-700 hover:to-orange-600 transform transition-transform duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-600 text-sm">Close</button>
        </div>
    </div>
    <div class="mt-4">
        {{-- {{ $doners->links('vendor.pagination.tailwind') }} --}}
        {{ $doners->appends(request()->query())->links() }}

    </div>
        
</x-admin-layout>


<script>
    function showImageModal(imageUrl) {
        document.getElementById('modalImage').src = imageUrl;
        document.getElementById('imageModal').classList.remove('hidden');
    }

    function closeImageModal() {
        document.getElementById('imageModal').classList.add('hidden');
    }
</script>