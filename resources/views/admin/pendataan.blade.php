@extends('layouts.main')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Pendataan Pekerjaan Alumni</h1>
        </div>
        <div class="section-body">
            <h2 class="section-title">Tambah Data Karang Taruna</h2>
            <p class="section-lead">Karang Taruna</p>
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Data Karang Taruna</h4>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Nama Karang Taruna</label>
                                    <input type="text" class="form-control" name=""
                                        placeholder="Masukkan Karang Taruna" required="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Alamat Lengkap Sekretariat</label>
                                    <input type="text" class="form-control" name=""
                                        placeholder="Masukkan Alamat Lengkap Sekretariat" required="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Foto Tampak Depan Sekretariat</label>
                                    <input type="file" class="form-control" name="" required="">
                                </div>
                            </div>
                        </div>
                        <div class="section-title">Lokasi Tugas</div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Kabupaten / Kota</label>
                                    <select class="form-control" name="" required>
                                        <option>Surabaya</option>
                                        <option>Gresik</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Kecamatan</label>
                                    <select class="form-control" name="" required>
                                        <option>Surabaya</option>
                                        <option>Gresik</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Desa / Kelurahan</label>
                                    <select class="form-control" name="" required>
                                        <option>Surabaya</option>
                                        <option>Gresik</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>No. Telp Sekretariat</label>
                                    <input type="number" class="form-control" name=""
                                        placeholder="Masukkan Nomor Telpon Sekretariat" required="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Alamat Email Karang Taruna</label>
                                    <input type="email" class="form-control" name=""
                                        placeholder="Masukkan Alamat Email Karang Taruna" required="">
                                </div>
                            </div>
                        </div>
                        <div class="section-title">Surat Keterangan Karang Taruna</div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Nomor SK</label>
                                    <input type="number" class="form-control" name="" placeholder="Masukkan No. SK"
                                        required="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Tanggal SK</label>
                                    <input type="date" class="form-control" name=""
                                        placeholder="Masukkan Tanggal SK" required="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Penandatangan SK</label>
                                    <input type="text" class="form-control" name=""
                                        placeholder="Masukkan Penandatangan SK" required="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Selaku</label>
                                    <input type="text" class="form-control" name=""
                                        placeholder="Masukkan Jabatan Penandatangan SK" required="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Upload SK</label>
                                    <input type="file" class="form-control" name="" required="">
                                </div>
                            </div>
                        </div>
                        <div class="section-title">Informasi Pengurus Karang Taruna</div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Nama Ketua Karang Taruna</label>
                                    <input type="text" class="form-control" name=""
                                        placeholder="Masukkan Nama Ketua Karang Taruna" required="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>No. Telp / Whatsapp Ketua</label>
                                    <input type="number" class="form-control" name=""
                                        placeholder="Masukkan No. Telp / Whatsapp Ketua" required="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Foto Ketua</label>
                                    <input type="file" class="form-control" name="" required="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Jumlah Pengurus Laki-Laki</label>
                                    <input type="number" class="form-control" name=""
                                        placeholder="Masukkan Jumlah Pengurus Laki-Laki" required="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Jumlah Pengurus Perempuan</label>
                                    <input type="number" class="form-control" name=""
                                        placeholder="Masukkan Jumlah Pengurus Perempuan" required="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Jumlah Anggota Laki-Laki</label>
                                    <input type="number" class="form-control" name=""
                                        placeholder="Masukkan Jumlah Anggota Laki-Laki" required="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Jumlah Anggota Perempuan</label>
                                    <input type="number" class="form-control" name=""
                                        placeholder="Masukkan Jumlah Anggota Perempuan" required="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Klasifikasi Karang Taruna</label>
                                    <select class="form-control" name="" required>
                                        <option disabled selected>Pilih Klasifikasi Karang Taruna</option>
                                        <option>Tumbuh</option>
                                        <option>Berkembang</option>
                                        <option>Maju</option>
                                        <option>Percontohan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Status Kinerja</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">Aktif</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Tidak Aktif</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <a type="button" href="#" class="btn btn-icon btn-danger"
                                    title="Batal">Batal</a>
                                <button type="submit" class="btn btn-icon btn-success" title="Simpan">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
