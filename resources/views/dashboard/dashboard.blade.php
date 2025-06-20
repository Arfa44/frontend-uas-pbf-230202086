<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0; padding: 0;
        }
        .navbar {
            background-color: #2c3e50;
            padding: 1em;
            color: white;
            display: flex;
            justify-content: space-between;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin-right: 1em;
        }
        .container {
            padding: 2em;
        }
        .content-header {
            margin-bottom: 1em;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div>
            <a href="/">Dashboard</a>
            <a href="/obat">Data Obat</a>
            <a href="/pasien">Data Pasien</a>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
