<!-- <x-admin-layout>
    <div class="container mx-auto py-6">
        <h1 class="text-3xl font-bold mb-6">Events</h1>
        
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Month</th>
                    <th class="py-2 px-4 border-b">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $event->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $event->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $event->month }}</td>
                        <td class="py-2 px-4 border-b">{{ $event->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin-layout> -->
<x-admin-layout>
    <div class="container mx-auto py-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-semibold">Events</h1>
            <a href="{{ route('events.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
                Add Event
            </a>
        </div>

        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 bg-gray-200 text-gray-600 font-semibold">No</th>
                        <th class="py-2 px-4 bg-gray-200 text-gray-600 font-semibold">Name</th>
                        <th class="py-2 px-4 bg-gray-200 text-gray-600 font-semibold">Month</th>
                        <th class="py-2 px-4 bg-gray-200 text-gray-600 font-semibold">Description</th>
                        <th class="py-2 px-4 bg-gray-200 text-gray-600 font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $index => $event)
                    <tr class="border-b">
                        <td class="py-2 px-4">{{ $index + 1 }}</td>
                        <td class="py-2 px-4">{{ $event->name }}</td>
                        <td class="py-2 px-4">{{ $event->month }}</td>
                        <td class="py-2 px-4">{{ $event->description }}</td>
                        <td class="py-2 px-4 flex space-x-2">
                            <a href="{{ route('events.edit', $event->id) }}" class="text-yellow-500 hover:text-yellow-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17l-5-5m0 0l5-5m-5 5h12M5 7h14m0 0l-5 5m5-5l-5 5"/>
                                </svg>
                            </a>
                            <form action="{{ route('events.destroy', $event->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>


