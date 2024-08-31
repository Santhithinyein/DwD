<x-superadmin-layout>
    <div class="container mt-5">
        <h1>Add Admin</h1>

        <form action="{{ route('superadmin.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>

            <div class="mb-3">
    <label for="user_type_id" class="form-label">Admin Type</label>
    <select name="user_type_id" id="user_type_id" class="form-control" style="background-color:gray; color:pink;">
        @foreach($userTypes as $type)
            <option value="{{ $type->id }}" style="color:pink;">{{ $type->type }}</option>
        @endforeach
    </select>
    </div>


            <button type="submit" class="btn btn-primary">Add Admin</button>
        </form>
    </div>



</x-superadmin-layout>
    