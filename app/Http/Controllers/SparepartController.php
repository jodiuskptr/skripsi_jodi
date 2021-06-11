<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SparepartController extends Controller
{
    function index()
    {

        $sparepart = DB::table('sparepart')->get();
        return view('admin.sparepart', ['sparepart' => $sparepart]);
    }

    function hapus($id)
    {
        DB::table('sparepart')->where('id_sparepart', $id)->delete();
        return redirect('/sparepart');
    }

    public function tambah()
    {

        // memanggil view tambah
        return view('tambah');
    }
}
