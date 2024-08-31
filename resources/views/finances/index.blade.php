<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance List</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Finance List</h1>
        <a href="{{ route('finances.create') }}" class="btn btn-primary mb-3">Add Finance</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $counter = 1;
                @endphp
                @foreach($finances as $finance)
                <tr>
                    <td>{{ $counter++ }}</td>
                    <td>{{ $finance->name }}</td>
                    <td>{{ $finance->amount }}</td>
                    <td>{{ $finance->created_at->format('Y-m-d') }}</td>
                    <td>
                        <a href="{{ route('finances.edit', $finance->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('finances.destroy', $finance->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
