@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Tentang Aplikasi</h1>
        <p class="lead">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus voluptatem vitae ipsam placeat aspernatur facilis dolore deleniti vero nam? Quo, voluptatibus similique. Officia dignissimos assumenda beatae provident quod. Similique, cumque.
        </p>
        <p class="lead">
            <a class="btn btn-success btn-lg" href="{{ route('home') }}" role="button">Memulai</a>
        </p>
    </div>
</div>
@endsection