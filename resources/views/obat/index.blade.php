<style>
  .container {
    max-width: 900px;
    margin: 30px auto;
    padding: 20px;
    font-family: sans-serif;
    border: 1px solid #ccc;
    border-radius: 8px;
  }

  h1 {
    text-align: center;
    margin-bottom: 20px;
  }

  .btn-dashboard,
  .btn-tambah {
    display: inline-block;
    padding: 8px 16px;
    color: white;
    text-decoration: none;
    border-radius: 4px;
    margin-bottom: 15px;
    margin-right: 10px;
  }

  .btn-dashboard {
    background-color: #007bff;
  }

  .btn-dashboard:hover {
    background-color: #0056b3;
  }

  .btn-tambah {
    background-color: #28a745;
  }

  .btn-tambah:hover {
    background-color: #218838;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    text-align: left;
  }

  th, td {
    padding: 10px;
    border: 1px solid #ddd;
  }

  th {
    background-color: #f0f0f0;
  }

  tr:hover {
    background-color: #f9f9f9;
  }

  .btn-aksi a,
  .btn-aksi button {
    margin-right: 8px;
    padding: 5px 10px;
    font-size: 14px;
    text-decoration: none;
    border: none;
    border-radius: 3px;
    cursor: pointer;
  }

  .btn-edit {
    background-color: #ffc107;
    color: #000;
  }

  .btn-edit:hover {
    background-color: #e0a800;
  }

  .btn-hapus {
    background-color: #dc3545;
    color: #fff;
  }

  .btn-hapus:hover {
    background-color: #c82333;
  }
</style>

<div class="container">
  <h1>Daftar Obat</h1>

  <a href="{{ route('dashboard') }}" class="btn-dashboard">← Kembali ke Dashboard</a>
  <a href="{{ route('tambahobat') }}" class="btn-tambah">+ Tambah Obat</a>

  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Obat</th>
        <th>Kategori</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($obat as $index => $obt)
        <tr>
          <td>{{ $index + 1 }}</td>
          <td>{{ $obt['nama_obat'] }}</td>
          <td>{{ $obt['kategori'] }}</td>
          <td>{{ $obt['stok'] }}</td>
          <td>{{ $obt['harga'] }}</td>
          <td class="btn-aksi">
            <a href="{{ route('editobat', ['id' => $obt['id']]) }}" class="btn-edit">Edit</a>

            <form action="{{ route('deleteobat', ['id' => $obt['id']]) }}" method="POST" style="display:inline;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn-hapus" onclick="return confirm('Yakin ingin menghapus obat ini?')">
                Hapus
              </button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
