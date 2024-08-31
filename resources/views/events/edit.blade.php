<x-admin-layout>
    <div class="container mx-auto py-6">
        <div class="w-full max-w-lg mx-auto">
            <h2 class="text-2xl font-semibold mb-6">Edit Event</h2>

            <form action="{{ route('events.update', $event->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name</label>
                    <input type="text" name="name" id="name" value="{{ $event->name }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none" required>
                </div>

                <div class="mb-4">
                    <label for="month" class="block text-gray-700">Month</label>
                    <input type="text" name="month" id="month" value="{{ $event->month }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none" required>
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-gray-700">Description</label>
                    <textarea name="description" id="description" class="w-full px-4 py-2 border rounded-lg focus:outline-none" required>{{ $event->description }}</textarea>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
