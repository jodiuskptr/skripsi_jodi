@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-2 text-center py-4 text-light bg-success" style="min-height: 100vh">
        <img src="" alt="" class="rounded-circle">
        <p class="mb-4 mt-3 font-weight-bold h5"></p>

        <hr class="bg-light">
        @include('layouts.sidebar')

    </div>
    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}
        Nama Sparepart <input type="text" name="nama" required="required"> <br />
        Jenis Sparepart <input type="text" name="jabatan" required="required"> <br />
        Ketahanan Sparepart <input type="number" name="umur" required="required"> <br />
        Harga <textarea name="alamat" required="required"></textarea> <br />
        Lisensi<input type="text" name="nama" required="required"> <br />
        <input type="submit" value="Simpan Data">
    </form>
    <section class="main-section" id="service">

    </section>
</div>
</div>
</div>
@endsection