<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pasien</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f4f7;
            margin: 0;
            padding: 40px;
        }

        .container {
            background: #fff;
            max-width: 600px;
            margin: auto;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
        }

        label {
            font-weight: bold;
            color: #333;
            display: block;
            margin-bottom: 6px;
        }

        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }

        .form-actions {
            display: flex;
            justify-content: space-between;
        }

        .form-actions a,
        .form-actions button {
            padding: 10px 20px;
            font-size: 15px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;
            color: #fff;
        }

        .form-actions a {
            background-color: #6c757d;
        }

        .form-actions button {
            background-color: #007bff;
        }

        .form-actions a:hover {
            background-color: #5a6268;
        }

        .form-actions button:hover {
            background-color: #0069d9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Pasien</h1>
        <form action="{{ route('savepasien') }}" method="POST">
            @csrf

            <label for="nama">Nama Pasien</label>
            <input type="text" id="nama" name="nama" required>

            <label for="alamat">Alamat</label>
            <input type="text" id="alamat" name="alamat" required>

            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>

            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="">-- Pilih Kelamin --</option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>

            <div class="form-actions">
                <a href="/pasien">Kembali</a>
                <button type="submit">Simpan</button>
            </div>
        </form>
    </div>
</body>
</html>
