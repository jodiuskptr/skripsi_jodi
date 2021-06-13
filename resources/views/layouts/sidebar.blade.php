<div class="d-flex flex-column px-3">
    @if (Auth::user()->role == 'admin')
    <a href="{{ url('/') }}" class="btn btn-light mb-3">Home</a>
    <a href="{{ url('/datakriteria') }}" class="btn btn-light mb-3">Data Kriteria</a>
    <a href="{{ url('/sparepart') }}" class="btn btn-light mb-3">Data Suparepart</a>
    @else
    <a href="{{ url('/') }}" class="btn btn-light mb-3">Home</a>
    <a href="{{ url('/pengambilankeputusan') }}" class="btn btn-light mb-3">Pengambilan Keputusan</a>
    <a href="{{ url('/histori') }}" class="btn btn-light mb-3">Riwayat Pengambilan Keputusan</a>
    @endif
</div>
