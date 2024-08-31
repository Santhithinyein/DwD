<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Add User</h1>

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
    <label for="user_type_id" class="form-label">User Type</label>
    <select name="user_type_id" id="user_type_id" class="form-control" style="background-color:gray; color:pink;">
        @foreach($userTypes as $type)
            <option value="{{ $type->id }}" style="color:pink;">{{ $type->type }}</option>
        @endforeach
    </select>
</div>


            <button type="submit" class="btn btn-primary">Add User</button>
        </form>
    </div>
</body>
</html>
