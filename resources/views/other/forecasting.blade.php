@extends('layouts.main')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Forecasting</h1>
        </div>
        <div class="section-body">
            <h2 class="section-title">Data Nilai</h2>
            <p class="section-lead">Mahasiswa</p>
            <div class="card">
                <div class="card-header">
                    <h4>Masukan Nilai Mata Kuliah</h4>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="section-title">Mata Kuliah Pemograman</div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label>MK 1 (Algoritma Pemograman)</label>
                                    <input type="text" class="form-control" name="" placeholder="Masukan Nilai..."
                                        required="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>MK 2 (Pemograman Berbasis Objek)</label>
                                    <input type="text" class="form-control" name="" placeholder="Masukan Nilai..."
                                        required="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>MK3 (Perancangan Basis Data)</label>
                                    <input type="text" class="form-control" name="" placeholder="Masukan Nilai..."
                                        required="">

                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>MK4 (Pemograman Web)</label>
                                    <input type="text" class="form-control" name="" placeholder="Masukan Nilai..."
                                        required="">

                                </div>
                            </div>
                        </div>
                        <div class="section-title">Mata Kuliah Analisis Perancangan</div>


                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
