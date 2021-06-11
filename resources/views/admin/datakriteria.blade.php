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
        <div class="pl-4 py-4 text-light" style="background-color: #059669">
            <h2 class="font-weight-bold m-0">Dashboard</h2>
        </div>
        <div class="jumbotron mb-0">
            <section class="main-section" id="service">
                <!--main-section-start-->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Merek Sparepart</th>
                            <th scope="col">Jenis Sparepart</th>
                            <th scope="col">Kualitas</th>
                            <th scope="col">Lisensi</th>
                            <th scope="col">Harga</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
</div>
@endsection