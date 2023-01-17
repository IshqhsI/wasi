@extends('layouts.main')
@section('container')
    <div class="container section">
        <div class="header p-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 float-start px-0">
                        <h2>{{ $title }}</h2>
                    </div>
                    <div class="col-md-6">
                        <ol class="breadcrumb float-end mb-1 pt-2">
                            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Daftar</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>

        {{-- Content --}}
        <div class="card shadow">
            <div class="card-header bg-primary text-light">
                Data Paket Pekerjaan
            </div>
            <div class="card-body">
                <div class="row">
                    <form action="" method="post" class="row" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-6">
                            <label class="fw-bold" for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control my-2">

                            <label class="fw-bold" for="dinas">Dinas / Pengguna Jasa</label>
                            <input type="text" name="dinas" id="dinas" class="form-control my-2">

                            <label class="fw-bold" for="ppk">Pejabat Pembuat Komitmen</label>
                            <input type="text" name="ppk" id="ppk" class="form-control my-2">

                            <label class="fw-bold" for="namaPaket">Nama Paket Pekerjaan</label>
                            <input type="text" name="namaPaket" id="namaPaket" class="form-control my-2">

                            <label class="fw-bold" for="lokasi">Lokasi Pekerjaan</label>
                            <input type="text" name="lokasi" id="lokasi" class="form-control my-2">

                            <div class="form-group my-2">
                                <label class="fw-bold" for="kompleksPekerjaan">Kompleksitas Pekerjaan</label>
                                <div class="form-group my-2 radio">
                                    <input class="form-check-input " type="radio" name="kompleksPekerjaan" id="komplek"
                                        value="Komplek">
                                    <label class="form-check-label" for="komplek">
                                        Komplek
                                    </label>
                                    <input class="form-check-input" type="radio" name="kompleksPekerjaan" id="sederhana"
                                        value="Sederhana">
                                    <label class="form-check-label" for="sederhana">
                                        Sederhana
                                    </label>
                                </div>
                            </div>

                            <label class="fw-bold" for="namaPerusahaan">Nama Perusahaan</label>
                            <input type="text" name="namaPerusahaan" id="namaPerusahaan" class="form-control my-2">

                            <label class="fw-bold" for="alamatPerusahaan">Alamat Perusahaan</label>
                            <input type="text" name="alamatPerusahaan" id="alamatPerusahaan" class="form-control my-2">

                            <div class="form-group my-2">
                                <label class="fw-bold" for="prosesPilihPenyedia">Proses Pemilihan Penyedia</label>
                                <div class="form-group mt-2">
                                    <input class="form-check-input " type="checkbox" name="prosesPilihPenyedia"
                                        id="tender" value="Tender">
                                    <label class="form-check-label" for="tender">
                                        Tender
                                    </label>
                                </div>
                                <div class="form-group">
                                    <input class="form-check-input" type="checkbox" name="prosesPilihPenyedia"
                                        id="pengadaanLangsung" value="Pengadaan Langsung">
                                    <label class="form-check-label" for="pengadaanLangsung">
                                        Pengadaan Langsung
                                    </label>
                                </div>
                                <div class="form-group">
                                    <input class="form-check-input" type="checkbox" name="prosesPilihPenyedia"
                                        id="penunjukanLangsung" value="Penunjukan Langsung">
                                    <label class="form-check-label" for="penunjukanLangsung">
                                        Penunjukan Langsung
                                    </label>
                                </div>
                            </div>

                            <div class="form-group my-2">
                                <label class="fw-bold" for="metodePembayaran">Metode Pembayaran Pekerjaan</label>
                                <div class="form-group my-2 radio">
                                    <input class="form-check-input " type="radio" name="metodePembayaran"
                                        id="sertifikatBulanan" value="Monthly Certificate ( Sertifikat Bulanan )">
                                    <label class="form-check-label me-4" for="sertifikatBulanan">
                                        Monthly Certificate ( Sertifikat Bulanan )
                                    </label> <br>
                                    <input class="form-check-input" type="radio" name="metodePembayaran"
                                        id="termin" value="Termin">
                                    <label class="form-check-label" for="termin">
                                        Termin
                                    </label>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 myBorder">
                            <label class="fw-bold" for="noKontrak">Nomor Kontrak</label>
                            <input type="text" name="noKontrak" id="noKontrak" class="form-control my-2">

                            <label class="fw-bold" for="tglKontrak">Tanggal Kontrak</label>
                            <div class="form-group my-2">
                                <div class='input-group' id='tglKontrak'>
                                    <input type='date' class="form-control" name="tglKontrak" />
                                    <span class="input-group-text">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <label class="fw-bold" for="nilaiKontrak">Nilai Kontrak</label>
                            <input type="text" name="nilaiKontrak" id="nilaiKontrak" class="form-control my-2">

                            <div class="form-group">
                                <label class="fw-bold" for="jenisKontrak">Jenis Kontrak</label>
                                <div class="form-group my-2 radio">
                                    <input class="form-check-input " type="radio" name="jenisKontrak"
                                        id="tahunTunggal" value="Tahun Tunggal">
                                    <label class="form-check-label me-4" for="tahunTunggal">
                                        Tahun Tunggal
                                    </label>
                                    <input class="form-check-input" type="radio" name="jenisKontrak"
                                        value="Tahun Jamak" id="tahunJamak">
                                    <label class="form-check-label" for="tahunJamak">
                                        Tahun Jamak
                                    </label>
                                </div>
                            </div>

                            <div class="form-group my-2">
                                <label class="fw-bold" for="dokumenKontrak">Dokumen Kontrak</label>
                                <div class="input-group my-2">
                                    <input type="file" class="form-control" id="dokumenKontrak"
                                        name="dokumenKontrak">
                                    <label class="input-group-text" for="dokumenKontrak">Upload</label>
                                </div>
                            </div>

                            <label class="fw-bold" for="konsultanPengawas">Konsultan Pengawas</label>
                            <input type="text" name="konsultanPengawas" id="konsultanPengawas"
                                class="form-control my-2">

                            <label class="fw-bold" for="konsultanPerencana">Konsultan Perencana</label>
                            <input type="text" name="konsultanPerencana" id="konsultanPerencana"
                                class="form-control my-2">

                            <label class="fw-bold" for="waktuPelaksanaanKerja">Waktu Pelaksanaan Kerja</label>
                            <input type="text" name="waktuPelaksanaanKerja" id="waktuPelaksanaanKerja"
                                class="form-control my-2">

                            <div class="form-group my-2">
                                <label class="fw-bold" for="jadwalPelaksanaanPekerjaan">Jadwal Pelaksanaan
                                    Pekerjaan</label>
                                <div class="input-group my-2">
                                    <input type="file" class="form-control" id="jadwalPelaksanaanPekerjaan"
                                        name="jadwalPelaksanaanPekerjaan">
                                    <label class="input-group-text" for="jadwalPelaksanaanPekerjaan">Upload</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="fw-bold" for="sumberDana">Sumber Dana</label>
                                <div class="form-group my-2 radio">
                                    <input class="form-check-input " type="radio" name="sumberDana" id="apbn"
                                        value="APBN">
                                    <label class="form-check-label" for="apbn">
                                        APBN
                                    </label>
                                    <br>
                                    <input class="form-check-input" type="radio" name="sumberDana" id="apbd"
                                        value="APBD">
                                    <label class="form-check-label" for="apbd">
                                        APBD
                                    </label>
                                    <br>

                                    <input class="form-check-input" type="radio" name="sumberDana" id="swasta"
                                        value="Swasta">
                                    <label class="form-check-label" for="swasta">
                                        Swasta
                                    </label>
                                    <br>
                                    <input class="form-check-input" type="radio" name="sumberDana" id="hibah"
                                        value="Hibah">
                                    <label class="form-check-label" for="hibah">
                                        Hibah
                                    </label>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-12 my-3  ">
                            <button type="submit" class="btn btn-primary mt-2">
                                Next
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
