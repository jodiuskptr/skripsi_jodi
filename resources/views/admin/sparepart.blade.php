@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-2 text-center py-4 text-light bg-success" style="min-height: 100vh">
        <img src="" alt="" class="rounded-circle">
        <p class="mb-4 mt-3 font-weight-bold h5"></p>

        <hr class="bg-light">
        @include('layouts.sidebar')

    </div>

    <div class="col-10 pl-0">
        <div class="jumbotron mb-0">
            <section class="main-section" id="service">
                <!--main-section-start-->
                <table class="table">
                    <a href="{{ url('formtambah')}}" type="button" class="btn btn-primary">Tambah Data</a>
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
                            <td>{{ $p->Jenis_sparepart }}</td>
                            <td>{{ $p-> daya_tahan}}</td>
                            <td>{{ $p->lisensi}}</td>
                            <td>{{$p->harga}}</td>
                            <td>
                                <a href="">Edit</a>
                                |
                                <a href="/sparepart/hapus/{{ $p->id_sparepart }}">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </section>
        </div>
    </div>
</div>
@endsection