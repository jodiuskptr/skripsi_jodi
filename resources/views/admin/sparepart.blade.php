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
            <div class="btn-group">
                <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Kategori
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Vbelt</a></li>
                    <li><a class="dropdown-item" href="#">Roller</a></li>
                    <li><a class="dropdown-item" href="#">Rumah Roller</a></li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
            </div>
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
                @foreach($sparepart as $nomer => $p)
                <tbody>
                    <tr>
                        <td>{{ $nomer+1}} </td>
                        <td>{{ $p->merek_sparepart }}</td>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->daya_tahan}}</td>
                        <td>{{ $p->lisensi}}</td>
                        <td>{{ $p->harga }}</td> --}}
                        <td>
                            {{-- <a href="{{ route('edit.form', $p->id_sparepart) }}" class="btn btn-info">
                            <span class="iconify" data-icon="mdi:pencil" data-inline="false" style="color: #fff;" data-width="16px" data-height="16px"></span>
                            </a> --}}

                            {{-- <a href="/sparepart/hapus/{{ $p->id_sparepart }}" class="btn btn-danger">
                            <span class="iconify" data-icon="mdi:trash-can" data-inline="false" style="color: #fff;" data-width="16px" data-height="16px"></span>
                            </a> --}}
                        </td>
                    </tr>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
                </tbody>
                {{-- @endforeach --}}
            </table>
        </div>
    </div>

</div>
@endsection