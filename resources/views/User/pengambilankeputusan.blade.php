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

        <section class="main-section" id="service">
            <!--main-section-start-->
            <div class="container">
                <h2>Bobot</h2>
                <h6>Silakan masukan bobot dari setiap kriteria</h6>
                <form method="POST" action="CalculationPage.php">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-3 wow fadeInLeft delay-05s">
                            <div class="service-list">
                                <div class="service-list-col1">
                                </div>
                                <div class="service-list-col2">

                                    <div class="form-group">
                                        <label for="inputBiaya">Jenis Motor</label>
                                        <select class="form-control" id="motor" name="motor">
                                            @foreach($motor as $p)
                                            <option value="{{$p->id_motor}}">{{$p->merek_motor}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputPertemuan">Spare Part</label>
                                        <select class="form-control" id="Spare_part" name="Spare_part">
                                            @foreach($kategori as $p)
                                            <option value="{{$p->id}}">{{$p->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputFasilitas">Harga</label>
                                        <select class="form-control" id="harga" name="harga">
                                            <option value="1">Tidak Penting</option>
                                            <option value="2">Penting</option>
                                            <option value="3">Sangat Penting</option>
                                            <option value="4">Mutlak Penting</option>
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label for="inputPertemuan">Dayatahan</label>
                                        <select class="form-control" id="daya_tahan" name="daya_tahan">
                                            <option value="1">Tidak Penting</option>
                                            <option value="2">Penting</option>
                                            <option value="3">Sangat Penting</option>
                                            <option value="4">Mutlak Penting</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputKapasitas">Lisensi</label>
                                        <select class="form-control" id="lisensi" name="lisensi">
                                            <option value="1">Tidak Penting</option>
                                            <option value="2">Penting</option>
                                            <option value="3">Sangat Penting</option>
                                            <option value="4">Mutlak Penting</option>
                                        </select>
                                    </div>

                                    <br>

                                    <div class="form-group">
                                        <button type="submit" class="input-btn" name="submit">Hitung</button>
                                    </div>

                                </div>
                            </div>
                            <br>
                            <h3 class="font-weight-bold">Hasil Perhitungan</h3>
                            <table class="table table-sm table-hover" border="2">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Rank</th>
                                        <th>Nama Bimbel</th>
                                        <th>Nilai</th>
                                        <th>Biaya</th>
                                        <th>Fasilitas</th>
                                        <th>Jumlah Pertemuan</th>
                                        <th>Kapasitas</th>
                                        <th>Alamat</th>
                                    </tr>
                                </thead>
                            </table>
                            </<br>
                        </div>
                        <div>

                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </form>
            </div>
        </section>
    </div>
</div>
@endsection