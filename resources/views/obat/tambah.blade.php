<style>
    .form-container {
        max-width: 600px;
        margin: 20px auto;
        padding: 24px;
        border: 1px solid #ccc;
        border-radius: 12px;
        background-color: #f9f9f9;
        font-family: sans-serif;
    }

    .form-container h2 {
        margin-bottom: 20px;
        font-size: 24px;
        color: #333;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-label {
        display: block;
        margin-bottom: 5px;
        font-weight: 600;
        color: #444;
    }

    .form-input {
        width: 100%;
        padding: 8px 12px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
    }

    .form-buttons {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .btn {
        padding: 8px 16px;
        font-size: 14px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        text-decoration: none;
        color: white;
    }

    .btn-primary {
        background-color: #28a745;
    }

    .btn-secondary {
        background-color: #6c757d;
    }

    .btn:hover {
        opacity: 0.9;
    }
</style>

<div class="form-container">
    <h2>🩺 Tambah Obat</h2>

    <form action="{{ route('saveobat') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_obat" class="form-label">Nama Obat</label>
            <input type="text" id="nama_obat" name="nama_obat" class="form-input" required>
        </div>

        <div class="form-group">
            <label for="kategori" class="form-label">Kategori</label>
            <input type="text" id="kategori" name="kategori" class="form-input" required>
        </div>

        <div class="form-group">
            <label for="stok" class="form-label">Stok</label>
            <input type="number" id="stok" name="stok" class="form-input" required>
        </div>

        <div class="form-group">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" id="harga" name="harga" class="form-input" required>
        </div>

        <div class="form-buttons">
            <a href="/obat" class="btn btn-secondary">← Kembali</a>
            <button type="submit" class="btn btn-primary">💾 Simpan</button>
        </div>
    </form>
</div>
