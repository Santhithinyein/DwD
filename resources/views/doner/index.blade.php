<x-admin-layout>
    <div class="max-w-full overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200 border border-gray-200 shadow-sm">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Receipt No</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Address</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Donation Type</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($doners as $key => $doner)
                
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $key+1 }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{$doner->receiveNo}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{$doner->created_at->format('d-m-Y')}}</td>
                        {{-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            @foreach ($doner->userCLists as $userCList)
                                {{ $userCList->created_at->format('d-m-Y') }} <br>
                            @endforeach
                        </td> --}}
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $doner->user->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $doner->user->uAddress }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $doner->donationType->type}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $doner->amount}}</td>
                        {{-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            @foreach ($doner->transactions as $transaction)
                            {{$transaction->amount}}<br>
                            @endforeach
                        </td> --}}
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <button>Edit</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</x-admin-layout>