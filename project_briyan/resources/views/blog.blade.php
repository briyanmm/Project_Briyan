<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Blog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            width: 80%;
            max-width: 800px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        th, td {
            border: 1px solid #dddddd;
            padding: 12px;
        }

        th {
            background-color: #4f46e5;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9fafb;
        }

        td {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Blog</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                    <tr>
                        <td>{{ $blog->id }}</td>
                        <td>{{ $blog->name }}</td>
                        <td>{{ $blog->address }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
