<x-admin-layout>
    <div class="container mx-auto mt-10 p-6 max-w-md bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold mb-6">Edit Admin</h1>

        <form action="{{ route('superadmin.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name" value="{{ $user->name }}" required
                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" value="{{ $user->email }}" required
                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" value="*********" 
                       style="pointer-events: none; z-index: -1;"
                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm bg-gray-100 focus:outline-none sm:text-sm">
                <small class="text-red-500">Leave it to keep current password.</small>
            </div>

            <div class="mb-4">
                <label for="user_type_id" class="block text-sm font-medium text-gray-700">Admin Type</label>
                <select name="user_type_id" id="user_type_id"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @foreach($userTypes as $type)
                        <option value="{{ $type->id }}" {{ $user->user_type_id == $type->id ? 'selected' : '' }}>{{ $type->type }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit"
            class="w-full inline-block px-4 py-2
            text-white bg-gradient-to-r from-red-600 to-orange-500 rounded-lg shadow-lg hover:from-red-700 hover:to-orange-600 transform transition-transform duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-600">
                Update Admin
            </button>
        </form>
    </div>
</x-admin-layout>
