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
            <h2 class="font-weight-bold m-0">Testing Perhitungan</h2>
        </div>
        <div class="row">
            <div class="wow fadeInLeft delay-05s">
                <div>
                    <h3 class="font-weight-bold">Tabel Bobot</h3>

                    <table class="table table-sm table-hover" border="1px">
                        <thead class="thead-dark">
                            <tr>
                                <th>Biaya</th>
                                <th>Fasilitas</th>
                                <th>Pertemuan</th>
                                <th>Kapasitas</th>
                            </tr>
                        </thead>
                        <?php

                        $bobot = array();
                        $biaya = $_POST['biaya'];
                        $fasilitas = $_POST['fasilitas'];
                        $pertemuan = $_POST['pertemuan'];

                        $bobot = array(
                            "1" => $biaya,
                            "2" => $fasilitas,
                            "3" => $pertemuan,
                        );

                        $timestamp = date("Y-m-d H:i:s");

                        $query = "INSERT INTO histori(id_user, harga, daya_tahan, lisensi)
								VALUES('$id_user','$harga', '$dayatahan', '$lisensi')";

                        $result = mysqli_query($koneksi, $query);

                        $id_history = mysqli_insert_id($koneksi);

                        ?>

                </div>
            </div>
            @endsection