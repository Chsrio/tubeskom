@extends('layouts.main')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Detail Alumni</h1>
        </div>
        <div class="section-body">
            <div class="card author-box card-primary">
                <div class="card-body">
                    <div class="author-box-left">
                        <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle author-box-picture">
                    </div>
                    <div class="author-box-details">
                        <div class="author-box-name">
                            <h3>{{ $dataAlumni->user->name }}</h3>
                        </div>

                        <div class="author-box-job">
                            {{ $dataAlumni->pekerjaan }}
                        </div>

                        <div class="author-box-description">
                            <ul>
                                <li>Nilai Mata Kuliah Pemograman : {{ $dataAlumni['Mata Kuliah Pemograman'] }}</li>
                                <li>Nilai Mata Kuliah Manajemen SI/IT : {{ $dataAlumni['Mata Kuliah Manajemen SI/IT'] }}
                                </li>
                                <li>Nilai Mata Kuliah Data dan Informasi :
                                    {{ $dataAlumni['Mata Kuliah Data dan Informasi'] }}</li>
                                <li>Nilai Mata Kuliah Sistem Informasi : {{ $dataAlumni['Mata Kuliah Sistem Informasi'] }}
                                </li>
                                <li>Nilai Mata Kuliah Rekayasa dan Perancangan Sistem Informasi:
                                    {{ $dataAlumni['Mata Kuliah Rekayasa dan Perancangan Sistem Informasi'] }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="float-right mt-sm-0 mt-3">
                        <a href="{{ route('history') }}">
                            << Back</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
