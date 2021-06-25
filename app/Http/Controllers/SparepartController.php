<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sparepart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;



class SparepartController extends Controller
{
    function index()
    {
        $sparepart = DB::table('sparepart')->join('kategori', 'kategori.id', 'sparepart.kategori_id')->orderBy('merek_sparepart', 'asc')->get();
        return view('admin.sparepart', compact('sparepart'));
        // return view('admin.sparepart');
    }



    public function edit($id)
    {
        $sparepart = Sparepart::where('id_sparepart', $id)->first();

        return view('admin.formedit', compact('sparepart'));
    }



    function hapus($id)
    {
        DB::table('sparepart')->where('id_sparepart', $id)->delete();
        return redirect('/sparepart');
    }

    public function tambah(Request $request)
    {

        //$data = $request->except('_method', '_token', 'submit');
        $validator = Validator::make($request->all(), [
            'merek' => 'required',
            'jenis' => 'required',
            'ketahanan' => 'required',
            'harga' => 'required',
            'lisensi' => 'required',
        ]);

        // if ($validator->fails()) {
        //     return redirect()->Back()->withInput()->withErrors($validator);
        // }

        Sparepart::create([
            'merek_sparepart' => $request->merek,
            'kategori_id' => $request->jenis,
            'daya_tahan' => $request->ketahanan,
            'harga' => $request->harga,
            'lisensi' => $request->lisensi,

        ]);

        // if ($record = Sparepart::firstOrCreate($data)) {
        //     Session::flash('message', 'Added Successfully!');
        //     Session::flash('alert-class', 'alert-success');
        //     return redirect()->route('subjects');
        // } else {
        //     Session::flash('message', 'Data not saved!');
        //     Session::flash('alert-class', 'alert-danger');
        // }

        return redirect('/sparepart');
    }


    public function create()
    {
        return view('subjects.create');
    }
}
