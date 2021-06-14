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
            <h2 class="font-weight-bold m-0">Tambah Sparepart</h2>
        </div>

        <div class="p-4">
            <a href="{{ url()->previous() }}" type="button" class="text-primary d-inline-flex align-items-center">
                <span class="iconify text-primary mr-2" data-icon="mdi:arrow-left" data-inline="false"></span>
                Kembali
            </a>

            <form action="/sparepart/create" method="post" class="w-50 my-4">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">Merek Sparepart</label>
                    <input type="text" class="form-control" name="merek" id="nama" value="{{$sparepart->merek_sparepart}}" required>
                </div>

                <div class="form-group">
                    <label for="jenis">Jenis Sparepart</label>
                    <input type="text" class="form-control" name="jenis" id="jenis" value="{{$sparepart->jenis_sparepart}}" required>
                </div>

                <div class="form-group">
                    <label for="ketahanan">Ketahanan Sparepart</label>
                    <input type="text" class="form-control" name="ketahanan" id="ketahanan" required>
                </div>

                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" class="form-control" name="harga" id="harga" required>
                </div>

                <div class="form-group">
                    <label for="harga">Ukuran</label>
                    <input type="number" class="form-control" name="ukuran" id="ukuran" required>
                </div>


                <div class="form-group">
                    <label for="inputPertemuan">Lisensi</label>
                    <select class="form-control" name="lisensi" id="lisensi">
                        <option value="orisinil">Orisinil</option>
                        <option value="aftermarket">After Market</option>

                    </select>
                </div>

                <input type="submit" value="Simpan Data" class="btn btn-primary my-3">

            </form>
        </div>
    </div>
</div>
@endsection