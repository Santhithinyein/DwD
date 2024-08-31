<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Super Admin - Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Super Admin - User List</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('superadmin.create') }}" class="btn btn-primary mb-3">Add User</a>

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
</body>
</html>
