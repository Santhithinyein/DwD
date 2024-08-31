<x-superadmin-layout>
    <div class="container mt-5">
        <h1>Edit Admin</h1>

        <form action="{{ route('superadmin.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="{{ $user->email }}" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" style="pointer-events: none;z-index: negative value;" value="*********">
                <small style="color: red">Leave it to keep current password.</small>
            </div>

            <div class="mb-3">
                <label for="user_type_id" class="form-label">Admin Type</label>
                <select name="user_type_id" id="user_type_id" class="form-control">
                    @foreach($userTypes as $type)
                        <option value="{{ $type->id }}" {{ $user->user_type_id == $type->id ? 'selected' : '' }}>{{ $type->type }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update Admin</button>
        </form>
    </div>

</x-superadmin-layout>
    

