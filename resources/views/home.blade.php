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
        <div class="pl-4 py-4 text-light" style="background-color: #059669">
            <h2 class="font-weight-bold m-0">Dashboard</h2>
        </div>
        <div class="jumbotron mb-0">
            <h1 class="display-6">Selamat Datang {{ $user->name }}</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <p class="lead">
                @if (Auth::user()->role == 'user')
                <a class="btn btn-primary btn-lg" href="{{ route('pengambilankeputusan') }}" role="button">Pengambilan Keputusan</a>
                @else
                @endif
            </p>
        </div>
    </div>
</div>
@endsection
