@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-2 text-center py-4 text-light bg-success" style="min-height: 100vh">
        <img src="https://picsum.photos/100" alt="" class="rounded-circle d-block mx-auto mb-3">
        <a href="{{ route('profile') }}" class="mb-4 mt-3 font-weight-bold h5 px-0 text-light">{{ auth()->user()->name }}</a>

        <hr class="bg-light">
        @include('layouts.sidebar')

    </div>

    <div class="col-10 pl-0">
        <div class="p-4 text-light" style="background-color: #059669">
            <h2 class="font-weight-bold m-0">Daftar Sparepart</h2>
        </div>

        <div class="p-4">
            <a href="{{ url('formtambah') }}" type="button" class="btn btn-primary">Tambah Data</a>
            <table class="table my-4">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Merek Sparepart</th>
                        <th scope="col">Jenis Sparepart</th>
                        <th scope="col">Dayatahan</th>
                        <th scope="col">Lisensi</th>
                        <th scope="col">Harga</th>

                    </tr>

                </thead>
                @foreach($sparepart as $p)
                <tbody>
                    <tr>
                        <td>{{ $p->id_sparepart }}</td>
                        <td>{{ $p->merek_sparepart }}</td>
                        <td>{{ $p->jenis_sparepart }}</td>
                        <td>{{ $p->daya_tahan}}</td>
                        <td>{{ $p->lisensi}}</td>
                        <td>{{ $p->harga }}</td>
                        <td>
                            <a href="{{ route('edit.form', $p->id_sparepart) }}">Edit</a>

                            <a href="/sparepart/hapus/{{ $p->id_sparepart }}">Hapus</a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection