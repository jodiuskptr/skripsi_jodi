@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-2 text-center py-4 text-light bg-success" style="min-height: 100vh">
        <img src="https://via.placeholder.com/100" alt="" class="rounded-circle">
        <p class="mb-4 mt-3 font-weight-bold h5">{{ $user->name }}</p>

        <hr class="bg-light">

        <div class="d-flex flex-column px-3">
            <a href="#" class="btn btn-light mb-3">Pengambilan Keputusan</a>
            <a href="#" class="btn btn-light mb-3">Riwayat Pengambilan Keputusan</a>
        </div>
    </div>
    <div class="col-10 pl-0">
        <div class="pl-4 py-4 text-light" style="background-color: #059669">
            <h2 class="font-weight-bold m-0">Dashboard</h2>
        </div>
        <div class="jumbotron mb-0">
            <h1 class="display-6">Selamat Datang {{ $user->name }}</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Pengambilan Keputusan</a>
            </p>
        </div>
    </div>
  </div>
@endsection
