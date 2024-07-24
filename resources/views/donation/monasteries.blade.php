<!-- donation/monasteries.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate to Monastery</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-yellow-100 p-8">
    <div class="container mx-auto w-2/5 content-center">
        <h1 class="text-2xl font-bold mb-6">Select a Monastery to Donate</h1>
        <table class="table-auto w-full bg-white p-6 rounded-lg shadow-md">
            <thead>
                <tr>
                    <th class="px-4 py-2">Monastery Name</th>
                    <th class="px-4 py-2">Monk Name</th>
                    <th class="px-4 py-2">Address</th>
                    <th class="px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($monasteries as $monastery)
                    <tr>
                        <td class="border px-4 py-2">{{ $monastery->monasteryName }}</td>
                        <td class="border px-4 py-2">{{ $monastery->monkName }}</td>
                        <td class="border px-4 py-2">{{ $monastery->address }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('donation.details', $monastery->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Donate</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
