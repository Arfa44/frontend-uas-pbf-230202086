<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Models\Pasien;


use Illuminate\Http\Request;

class PasienController extends Controller
{

    public function getallpasien()
    {
        $response = Http::get('http://localhost:8080/api/pasien');

        if ($response->successful()) {
            $data = $response->json();
            return view('pasien.index', ['pasien' => $data]);
        }

        return redirect('/')->withErrors(['gagal' => 'Gagal ambil data pasien']);
    }

    public function getpasienbyid($id)
    {
        $response = Http::get('http://localhost:8080/api/pasien/' . $id);

        if ($response->successful()) {
            $data = $response->json();
            return view('pasien.index', ['pasien' => $data['data_pasien']]);
        }

        return redirect('/')->withErrors(['gagal' => 'Gagal ambil data pasien']);
    }

    public function savepasien(Request $request)
    {
        $response = Http::post('http://localhost:8080/api/pasien', [
            "nama" => $request->nama,
            "alamat" => $request->alamat,
            "tanggal_lahir" => $request->tanggal_lahir,
            "jenis_kelamin" => $request->jenis_kelamin
        ]);

        if ($response->successful()) {
            return redirect('/pasien');
        }

        return redirect('/pasien')->withErrors(['gagal' => 'Gagal Menambahkan data pasien']);
    }

    public function editpasien($id)
    {
        $response = Http::get('http://localhost:8080/api/pasien/' . $id);

        if ($response->successful()) {
            $data = $response->json();
            return view('pasien.edit', ['pasien' => $data ]);
        }

        return redirect('/pasien')->withErrors(['gagal' => 'Gagal ambil data untuk diedit']);
    }


    public function updatepasien(Request $request, $id)
    {
        $response =
            //Http::put('http://localhost:8080/api/pasien/' . $id,
            $response = Http::asForm()->put(
                'http://localhost:8080/api/pasien/' . $id,
                [
                    "nama" => $request->nama,
                    "alamat" => $request->alamat,
                    "tanggal_lahir" => $request->tanggal_lahir,
                    "jenis_kelamin" => $request->jenis_kelamin
                ]
            );

        if ($response->successful()) {
            return redirect('/pasien');
        }

        return redirect('/pasien')->withErrors(['gagal' => 'Gagal Mengupdate data pasien']);
    }

    public function deletepasien($id)
    {
        $response = Http::delete('http://localhost:8080/api/pasien/' . $id);

        if ($response->successful()) {
            return redirect('/pasien');
        }

        return redirect('/pasien')->withErrors(['gagal' => 'Gagal Menghapus data pasien']);
    }
}
