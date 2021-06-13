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
            <h2 class="font-weight-bold m-0">Riwayat Pengambilan Keputusan</h2>
        </div>

        <div class="p-4">
            <h2>Table History</h2>

            <table class="table my-4">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal Dan Waktu</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include 'koneksi.php';
                        $id_user = $_SESSION['user_id'];
                        $query = "SELECT * FROM tb_history WHERE id_user='$id_user'";
                        $result = mysqli_query($koneksi, $query);
                        $index = 1;
                        while ($d = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $index ?></td>
                        <td><?php echo $d['tgl_jam'] ?></td>
                        <td>
                            <a href="history_detail.php?id=<?php echo $d['id_history']; ?>" class="btn btn-success" role="button">DETAIL</a>
                        </td>
                    </tr>
                    <?php
                        $index++;
                    }
                    ?>


                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
