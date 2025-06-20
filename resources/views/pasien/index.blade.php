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

  .btn-tambah,
  .btn-kembali {
    display: inline-block;
    padding: 8px 16px;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 4px;
    margin-bottom: 15px;
    margin-right: 10px;
  }

  .btn-tambah:hover,
  .btn-kembali:hover {
    background-color: #0056b3;
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
    background-color: #f8f8f8;
  }

  tr:hover {
    background-color: #f1f1f1;
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
  <h1>Daftar Pasien</h1>

  <a href="/" class="btn-kembali">← Kembali ke Dashboard</a>
  <a href="{{ route('tambahpasien') }}" class="btn-tambah">+ Tambah Pasien</a>

  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Pasien</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Kelamin</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($pasien as $index => $psn)
      <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $psn['nama'] }}</td>
        <td>{{ $psn['alamat'] }}</td> 
        <td>{{ $psn['tanggal_lahir'] }}</td>
        <td>{{ $psn['jenis_kelamin'] }}</td>
        <td class="btn-aksi">
          <a href="{{ route('editpasien', ['id' => $psn['id']]) }}" class="btn-edit">Edit</a>

          <form action="{{ route('deletepasien', ['id' => $psn['id']]) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-hapus" onclick="return confirm('Yakin ingin menghapus pasien ini?')">
              Hapus
            </button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
