<x-admin-layout>
    <h1 class="text-3xl py-3 px-3 font-bold">Users</h1>
    {{-- @if (Session::has('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ Session::get('success') }}</span>
    </div>
    @endif --}}
    @if (Session::has('success'))
    <div class="fixed inset-0 flex items-center justify-center z-50">
        <div class="w-60 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative max-w-sm mx-auto" role="alert">
            <strong class="font-bold">Send Successfully!</strong>
            {{-- <span class="block sm:inline">{{ Session::get('success') }}</span> --}}
            <button type="button" class="absolute top-0 right-0 px-4 py-3" onclick="this.parentElement.parentElement.style.display='none';">
                <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M14.348 5.652a1 1 0 00-1.414-1.414L10 7.172 7.066 4.238a1 1 0 10-1.414 1.414L8.586 10l-2.934 2.934a1 1 0 001.414 1.414L10 12.828l2.934 2.934a1 1 0 001.414-1.414L11.414 10l2.934-2.934z"/></svg>
            </button>
        </div>
    </div>
    @endif
    <div class="py-2">
        <a href="{{route('users.export')}}" class="px-4 py-2 bg-[#ec662d] hover:bg-[#9c2b04] hover:text-white rounded-lg shadow-lg ">Excel Export</a>
    </div>


    <div class="">
        <table class="min-w-full divide-y divide-gray-200 border border-gray-200 shadow-sm">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                    {{-- <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ph No</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th> --}}
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($users as $key => $user)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $key+1 }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $user->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $user->email }}</td>
                        {{-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $user->uPhNo }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $user->status ? 'Doner' : '' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <form action="{{route('mail',$user->id)}}" method="post">
                                @csrf
                                <button class="bg-gray-300 hover:bg-gray-500 hover:text-white px-4 py-2 rounded">Send Mail</button>
                            
                            </form>
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</x-admin-layout>