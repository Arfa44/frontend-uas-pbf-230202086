<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;

class ObatController extends Controller
{


    public function getallobat()
    {
        $response = Http::get('http://localhost:8080/api/obat');

        if ($response->successful()) {
            $data = $response->json();
            return view('obat.index', ['obat' => $data]);
        }

        return redirect('/')->withErrors(['gagal' => 'Gagal ambil data obat']);
    }

    public function getobatbyid($id)
    {
        $response = Http::get('http://localhost:8080/api/obat/' . $id);

        if ($response->successful()) {
            $data = $response->json();
            return view('obat.index', ['obat' => $data['data_obat']]);
        }

        return redirect('/')->withErrors(['gagal' => 'Gagal ambil data obat']);
    }

    public function saveobat(Request $request)
    {
        $response = Http::post('http://localhost:8080/api/obat', [
            "nama_obat" => $request->nama_obat,
            "kategori" => $request->kategori,
            "stok" => $request->stok,
            "harga" => $request->harga
        ]);

        if ($response->successful()) {
            return redirect('/obat');
        }

        return redirect('/obat')->withErrors(['gagal' => 'Gagal Menambahkan data obat']);
    }

    public function editobat($id)
    {
        $response = Http::get('http://localhost:8080/api/obat/' . $id);

        if ($response->successful()) {
            $data = $response->json();
            return view('obat.edit', ['obat' => $data]);
        }

        return redirect('/obat')->withErrors(['gagal' => 'Gagal mengambil data untuk diedit']);
    }


    public function updateobat(Request $request, $id)
    {
        $response = Http::put(
            'http://localhost:8080/api/obat/' . $id,
            [
                "nama_obat" => $request->nama_obat,
                "kategori" => $request->kategori,
                "stok" => $request->stok,
                "harga" => $request->harga
            ]
        );

        if ($response->successful()) {
            return redirect('/obat');
        }

        return redirect('/obat')->withErrors(['gagal' => 'Gagal Mengupdate data obat']);
    }

    public function deleteobat($id)
    {
        $response = Http::delete('http://localhost:8080/api/obat/' . $id);

        if ($response->successful()) {
            return redirect('/obat');
        }

        return redirect('/obat')->withErrors(['gagal' => 'Gagal Menghapus data obat']);
    }
}
