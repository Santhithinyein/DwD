<x-admin-layout>
    <div class="container mt-5">
        <h1>Super Admin - Admin List</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('superadmin.create') }}" class="btn btn-primary mb-3">Add User</a>
        <a href="{{ route('finances.index') }}" class="btn btn-primary mb-3">Finance </a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <!-- <th>Password</th> -->
                    <th>User Type ID</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $idNo = 1; // Initialize the ID No counter
                @endphp
               
                @foreach($users as $user)
                
                    @if($user->userType->id != 2)
                        <tr>
                            <td>{{ $idNo }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <!-- <td>••••••••</td> -->
                            <!-- <td>{{ $user->user_type_id }}</td> -->
                            <td>{{ $user->userType->type }}</td>
                            <td>
                                <a href="{{ route('superadmin.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('superadmin.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @php
                            $idNo++; // Increment the ID No counter only for valid rows
                        @endphp
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>

</x-admin-layout>
    

