<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Pasien</title>
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
        input[type="date"],
        select {
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
            background-color: #007bff;
            color: white;
        }

        .buttons a {
            background-color: #dc3545;
            color: white;
        }

        .buttons button:hover {
            background-color: #0056b3;
        }

        .buttons a:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Pasien</h1>

        <form action="{{ route('updatepasien', ['id' => $pasien['id']]) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="nama">Nama Pasien</label>
            <input type="text" id="nama" name="nama" value="{{ $pasien['nama'] }}" required>

            <label for="alamat">Alamat</label>
            <input type="text" id="alamat" name="alamat" value="{{ $pasien['alamat'] }}" required>

            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ $pasien['tanggal_lahir'] }}" required>

            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="L" {{ $pasien['jenis_kelamin'] === 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ $pasien['jenis_kelamin'] === 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>

            <div class="buttons">
                <button type="submit">Simpan</button>
                <a href="{{ route('tampilpasien') }}">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
