<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Obat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f9fc;
            margin: 0;
            padding: 40px;
        }

        .container {
            background: #fff;
            max-width: 600px;
            margin: auto;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 6px;
            color: #444;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
        }

        .buttons button,
        .buttons a {
            padding: 10px 20px;
            border: none;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .buttons button {
            background-color: #28a745;
            color: white;
        }

        .buttons a {
            background-color: #dc3545;
            color: white;
        }

        .buttons button:hover {
            background-color: #218838;
        }

        .buttons a:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Obat</h1>

        <form action="{{ route('updateobat', ['id' => $obat['id']]) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="nama_obat">Nama Obat</label>
            <input type="text" id="nama_obat" name="nama_obat" value="{{ $obat['nama_obat'] }}" required>

            <label for="kategori">Kategori</label>
            <input type="text" id="kategori" name="kategori" value="{{ $obat['kategori'] }}" required>

            <label for="stok">Stok</label>
            <input type="number" id="stok" name="stok" value="{{ $obat['stok'] }}" required>

            <label for="harga">Harga</label>
            <input type="number" id="harga" name="harga" value="{{ $obat['harga'] }}" required>

            <div class="buttons">
                <button type="submit">Simpan</button>
                <a href="{{ route('tampilobat') }}">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
