<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use App\Http\Controllers\Controller;
use App\Histori;
use App\Konversi;
use App\Models\Sparepart;
use App\Kriteria;
use Illuminate\Http\Request;

class PengambilankeputusanController extends Controller
{

    function index()
    {
        $motor = Motor::get();
        return view('User.pengambilankeputusan', compact('motor'));
    }

    function hitung(Request $request)
    {
        $harga = $request->harga;
        $dayatahan = $request->daya_tahan;
        $jenis_sparepart = $request->jenis_sparepart;

        $bobot = array(
            "1" => $harga,
            "2" => $dayatahan,
            "3" => $jenis_sparepart
        );
        $timestamp = date("Y-m-d H:i:s");

        Histori::create([

            'harga' => $request->harga,
            'daya_tahan' => $request->daya_tahan,
            'lisensi' => $request->lisensi,
            'waktu' => $request->waktu,
        ]);

        $alternatif = Sparepart::where('kategori_id', '1')->first();


        $konversi = array();
        $normalisasi = array();

        $konfersi = Konversi::get();
        $sparepart = $alternatif->id_kriteria;
        $id_kriteria = Kriteria::get();
        $konversi[$sparepart][$id_kriteria] = $konfersi;
        $normalisasi[$id_kriteria][$sparepart] = $konfersi;

        $kuadrat = array();
        $Xn = array();
    }
}
