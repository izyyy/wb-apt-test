<!-- resources/views/routes.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Routes</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

    <h1>API Routes</h1>
    
    <table>
        <thead>
            <tr>
                <th>Category</th>
                <th>Route</th>
                <th>URL</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $category => $routes)
                @foreach($routes as $name => $url)
                    <tr>
                        <td>{{ $category }}</td>
                        <td>{{ $name }}</td>
                        <td><a href="{{ $url }}" target="_blank">{{ $url }}</a></td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>

</body>
</html>
