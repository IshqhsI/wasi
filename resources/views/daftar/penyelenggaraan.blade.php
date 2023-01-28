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
                            <div class="form-group my-2">
                                <label class="fw-bold" for="jaminan_pelaksanaan">Jaminan Pelaksanaan</label>
                                <div class="form-group my-2 radio">
                                    <input class="form-check-input " type="radio" name="jaminan_pelaksanaan"
                                        id="perbankan" value="Perbankan">
                                    <label class="form-check-label" for="perbankan">
                                        Perbankan
                                    </label>
                                    <br>
                                    <input class="form-check-input " type="radio" name="jaminan_pelaksanaan"
                                        id="perusahaan_asuransi" value="Perusahaan Asuransi">
                                    <label class="form-check-label" for="perusahaan_asuransi">
                                        Perusahaan Asuransi
                                    </label>
                                    <br>
                                    <input class="form-check-input " type="radio" name="jaminan_pelaksanaan"
                                        id="perusahaan_penjaminan" value="Perusahaan Penjaminan">
                                    <label class="form-check-label" for="perusahaan_penjaminan">
                                        Perusahaan Penjaminan
                                    </label>
                                </div>
                            </div>

                            <div class="form-group my-2">
                                <label class="fw-bold" for="dokumen_jaminan_pelaksanaan">Dokumen Jaminan Pelaksanaan</label>
                                <div class="input-group my-2">
                                    <input type="file" class="form-control" id="dokumen_jaminan_pelaksanaan"
                                        name="dokumen_jaminan_pelaksanaan">
                                    <label class="input-group-text" for="dokumen_jaminan_pelaksanaan">Upload</label>
                                </div>
                            </div>

                            <div class="form-group my-2">
                                <label class="fw-bold" for="jaminan_uang_muka">Jaminan Uang Muka</label>
                                <div class="form-group my-2 radio">
                                    <input class="form-check-input " type="radio" name="jaminan_uang_muka" id="perbankan2"
                                        value="Perbankan">
                                    <label class="form-check-label" for="perbankan2">
                                        Perbankan
                                    </label>
                                    <br>
                                    <input class="form-check-input " type="radio" name="jaminan_uang_muka"
                                        id="perusahaan_asuransi2" value="Perusahaan Asuransi">
                                    <label class="form-check-label" for="perusahaan_asuransi2">
                                        Perusahaan Asuransi
                                    </label>
                                    <br>
                                    <input class="form-check-input " type="radio" name="jaminan_uang_muka"
                                        id="perusahaan_penjaminan2" value="Perusahaan Penjaminan">
                                    <label class="form-check-label" for="perusahaan_penjaminan2">
                                        Perusahaan Penjaminan
                                    </label>
                                </div>
                            </div>

                            <div class="form-group my-2">
                                <label class="fw-bold" for="dokumen_jaminan_uang_muka">Dokumen Jaminan Uang Muka</label>
                                <div class="input-group my-2">
                                    <input type="file" class="form-control" id="dokumen_jaminan_uang_muka"
                                        name="dokumen_jaminan_uang_muka">
                                    <label class="input-group-text" for="dokumen_jaminan_uang_muka">Upload</label>
                                </div>
                            </div>

                            <label class="fw-bold" for="biaya_penyelenggaraan_smkk">Berapa Biaya Penyelenggaran SMKK
                                sesuai
                                Kontrak</label>
                            <input type="text" name="biaya_penyelenggaraan_smkk" id="biaya_penyelenggaraan_smkk"
                                class="form-control my-2">

                            <label class="fw-bold" for="biaya_penyelenggaran_sesuai_permen">Apakah Biaya Penyelenggaraan
                                SMKK
                                tersebut sudah sesuai dengan Permen PUPR No. 10 Tahun 2021 Tentang Pedoman Sistem Manajemen
                                Keselamatan Konstruksi (Termasuk Penyediaan APD)</label>
                            <input type="text" name="biaya_penyelenggaran_sesuai_permen"
                                id="biaya_penyelenggaran_sesuai_permen" class="form-control my-2">

                            <div class="form-group my-2">
                                <label class="fw-bold" for="bukti_pembayaran_asuransi_tenaga_kerja">Bukti Pembayaran
                                    Asuransi Tenaga Kerja</label>
                                <div class="input-group my-2">
                                    <input type="file" class="form-control"
                                        id="bukti_pembayaran_asuransi_tenaga_kerja"
                                        name="bukti_pembayaran_asuransi_tenaga_kerja">
                                    <label class="input-group-text"
                                        for="bukti_pembayaran_asuransi_tenaga_kerja">Upload</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 myBorder">
                            <label class="fw-bold" for="bahan_atau_material">Bahan atau material utama yang
                                digunakan dalam pekerjaan konstruksi ini (Ex. Pasir, Besi, Batu, Tiang Pancang...etc)
                                Tolong sebutkan minimal 5 jenis?</label>
                            <input type="text" name="bahan_atau_material" id="bahan_atau_material"
                                class="form-control my-2">

                            <div class="form-group my-2">
                                <label class="fw-bold" for="penggunaan_barang_material">Penggunaan barang/
                                    material</label>
                                <div class="form-group my-2 radio">
                                    <input class="form-check-input " type="radio" name="penggunaan_barang_material"
                                        id="dalam_negeri_100%" value="Dalam Negeri 100%">
                                    <label class="form-check-label" for="dalam_negeri_100%">
                                        Dalam Negeri 100%
                                    </label>
                                    <br>
                                    <input class="form-check-input" type="radio" name="penggunaan_barang_material"
                                        id="luar_negeri" value="Luar Negeri">
                                    <label class="form-check-label" for="luar_negeri">
                                        Luar Negeri
                                    </label>
                                </div>
                            </div>

                            <label class="fw-bold persen" for="persen_penggunaan_barang_material ">Berapa persen
                                penggunaan
                                barang/material luar
                                negeri</label>
                            <input type="text" name="persen_penggunaan_barang_material"
                                id="persen_penggunaan_barang_material" class="form-control my-2 persen">

                            <div class="form-group my-2">
                                <label class="fw-bold" for="standar_mutu_peralatan">Terkait standar mutu peralatan, apakah
                                    ada
                                    uji kelayakan operasional peralatan</label>
                                <div class="form-group my-2 radio">
                                    <input class="form-check-input " type="radio" name="standar_mutu_peralatan"
                                        id="ada" value="Ada">
                                    <label class="form-check-label" for="ada">
                                        Ada
                                    </label>
                                    <br>
                                    <input class="form-check-input" type="radio" name="standar_mutu_peralatan"
                                        id="tidak_ada" value="Tidak Ada">
                                    <label class="form-check-label" for="tidak_ada">
                                        Tidak Ada
                                    </label>
                                </div>
                            </div>

                            <div class="form-group my-2 standarOperasional">
                                <label class="fw-bold" for="bukti_sertifikat_operasional">Bukti sertifikat operasional
                                    kelayakan alat</label>
                                <div class="input-group my-2">
                                    <input type="file" class="form-control" id="bukti_sertifikat_operasional"
                                        name="bukti_sertifikat_operasional">
                                    <label class="input-group-text" for="bukti_sertifikat_operasional">Upload</label>
                                </div>
                            </div>

                            <label class="fw-bold" for="jumlah_tenaga_kerja_yang_dipekerjakan">Jumlah tenaga kerja
                                konstruksi
                                yang dipekerjakan (Tukang)
                            </label>
                            <input type="text" name="jumlah_tenaga_kerja_yang_dipekerjakan"
                                id="jumlah_tenaga_kerja_yang_dipekerjakan" class="form-control my-2">

                            <label class="fw-bold" for="jumlah_tenaga_kerja_yang_memiliki_sertifikat">Jumlah tenaga kerja
                                konstruksi ( tukang) yang memiliki sertifikat kompetensi
                            </label>
                            <input type="text" name="jumlah_tenaga_kerja_yang_memiliki_sertifikat"
                                id="jumlah_tenaga_kerja_yang_memiliki_sertifikat" class="form-control my-2">

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
