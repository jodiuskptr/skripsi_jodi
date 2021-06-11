@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-2 text-center py-4 text-light bg-success" style="min-height: 100vh">
        <img src="" alt="" class="rounded-circle">
        <p class="mb-4 mt-3 font-weight-bold h5"></p>

        <hr class="bg-light">
        @include('layouts.sidebar')
        <div class="col-10 pl-0">
            <div class="pl-4 py-4 text-light" style="background-color: #059669">
                <h2 class="font-weight-bold m-0">Dashboard</h2>
            </div>
            <div class="jumbotron mb-0">
                <section class="main-section" id="service">
                    <!--main-section-start-->
                    <div class="container">
                        <h2>Table Histori</h2>
                        <div class="row">
                            <figure class="col-lg-5 col-sm-4 wow fadeInLeft">
                            </figure>

                            <table class="table">
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
                    <a class="Learn-More" href="#">Learn More</a>
            </div>
        </div>
    </div>
</div>
</div>