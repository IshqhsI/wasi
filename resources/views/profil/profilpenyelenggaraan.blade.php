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
                    <div class="col-lg-6">
                        <div class="form-group my-2">
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Jaminan Pelaksanaan</div>
                                    <div class="my-2">{{ $row->jaminan_pelaksanaan }}</div>
                                </div>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Dokumen Jaminan Pelaksanaan</div>
                                    <div class="my-2"><a href="/storage/{{ $row->dokumen_jaminan_pelaksanaan }}"
                                            class="btn btn-success" target="blank">Lihat..</a>
                                        <a href="#" class="btn btn-warning" target="blank">Download..</a>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Jaminan Uang Muka</div>
                                    <div class="my-2">{{ $row->jaminan_uang_muka }}</div>
                                </div>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Dokumen Jaminan Uang Muka</div>
                                    <div class="my-2"><a href="/storage/{{ $row->dokumen_jaminan_uang_muka }}"
                                            class="btn btn-success" target="blank">Lihat..</a>
                                        <a href="#" class="btn btn-warning" target="blank">Download..</a>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Berapa Biaya Penyelenggaran SMKK sesuai Kontrak</div>
                                    <div class="my-2">{{ $row->biaya_penyelenggaraan_smkk }}</div>
                                </div>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Apakah Biaya Penyelenggaraan SMKK tersebut sudah sesuai dengan
                                        Permen PUPR No. 10 Tahun 2021 Tentang Pedoman Sistem Manajemen Keselamatan
                                        Konstruksi (Termasuk Penyediaan APD)</div>
                                    <div class="my-2">{{ $row->biaya_penyelenggaran_sesuai_permen }}</div>
                                </div>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Bukti Pembayaran Asuransi Tenaga Kerja</div>
                                    <div class="my-2"><a
                                            href="/storage/{{ $row->bukti_pembayaran_asuransi_tenaga_kerja }}"
                                            class="btn btn-success" target="blank">Lihat..</a>
                                        <a href="#" class="btn btn-warning" target="blank">Download..</a>
                                    </div>
                                </div>
                            </li>
                        </div>
                    </div>

                    <div class="col-lg-6 myBorder">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Bahan atau material utama yang digunakan dalam pekerjaan konstruksi
                                    ini (Ex. Pasir, Besi, Batu, Tiang Pancang...etc) Tolong sebutkan minimal 5 jenis?
                                </div>
                                <div class="my-2">{{ $row->bahan_atau_material }}</div>
                            </div>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Penggunaan barang/ material</div>
                                <div class="my-2">{{ $row->penggunaan_barang_material }}</div>
                            </div>
                        </li>

                        @if ($row->penggunaan_barang_material === 'Luar Negeri')
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Jika memilih luar negeri, berapa persen penggunaan barang/material
                                        luar negeri
                                    </div>
                                    <div class="my-2">{{ $row->persen_penggunaan_barang_material }}</div>
                                </div>
                            </li>
                        @endif


                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Terkait standar mutu peralatan, apakah ada uji kelayakan
                                    operasional peralatan</div>
                                <div class="my-2">{{ $row->standar_mutu_peralatan }}</div>
                            </div>
                        </li>

                        @if (isset($row->bukti_sertifikat_operasional))
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Bukti sertifikat operasional kelaikan alat (jika ada)</div>
                                    <div class="my-2"><a href="/storage/{{ $row->bukti_sertifikat_operasional }}"
                                            class="btn btn-success" target="blank">Lihat..</a>
                                        <a href="#" class="btn btn-warning" target="blank">Download..</a>
                                    </div>
                                </div>
                            </li>
                        @endif

                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Jumlah tenaga kerja konstruksi yang dipekerjakan (Tukang)
                                </div>
                                <div class="my-2">{{ $row->jumlah_tenaga_kerja_yang_dipekerjakan }}</div>
                            </div>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Jumlah tenaga kerja konstruksi (Tukang) yang memiliki sertifikat
                                    kompetensi</div>
                                <div class="my-2">{{ $row->jumlah_tenaga_kerja_yang_memiliki_sertifikat }}</div>
                            </div>
                        </li>

                    </div>

                    <div class="col-lg-12 my-3  ">

                        <a href="/profil2" class="btn btn-primary mt-2">
                            Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
