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
            <h2 class="font-weight-bold m-0">Pengambilan Keputusan</h2>
        </div>

        <div class="p-4">
            <h2>Bobot</h2>
            <h6>Silakan masukan bobot dari setiap kriteria</h6>
            <form method="POST" action="CalculationPage.php" class="my-4">
                <div class="row">
                    <div class="col-md-4 wow fadeInLeft delay-05s">
                        <div class="service-list">
                            <div class="service-list-col2">
                                <div class="form-group">
                                    <label for="inputBiaya">Motor</label>
                                    <select class="form-control" id="biaya" name="biaya">
                                        <option value="1">Honda BeAT</option>
                                        <option value="2">Honda Scopy</option>
                                        <option value="3">Honda Vario 125</option>
                                        <option value="4"></option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="inputBiaya">Jenis Sparepart</label>
                                    <select class="form-control" id="biaya" name="biaya">
                                        <option value="1">Vbelt</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="inputFasilitas">Bobot Harga</label>
                                    <select class="form-control" id="fasilitas" name="fasilitas">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="inputPertemuan">Bobot Kualitas</label>
                                    <select class="form-control" id="pertemuan" name="pertemuan">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="inputKapasitas">Bobot Lisensi Sparepart</label>
                                    <select class="form-control" id="kapasitas" name="kapasitas">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>

                                <br>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" name="submit">Hitung</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 wow fadeInLeft delay-05s">
                        <div>
                            <h3 class="font-weight-bold">Hasil Perhitungan</h3>

                            <table class="table table-sm table-hover" border="2">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Ranking</th>
                                        <th>Merek</th>
                                        <th>Harga</th>
                                        <th>Nilai</th>
                                    </tr>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
