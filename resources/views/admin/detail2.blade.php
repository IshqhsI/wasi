@extends('layouts.mainDetail')
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
                            <li class="breadcrumb-item active" aria-current="page">Profil</li>
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
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Klasifikasi Usaha Pekerjaan Konstruksi</div>
                                <div class="my-2">{{ $row->klasifikasi_usaha }}</div>
                            </div>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Bentuk Usaha Jasa Konstruksi</div>
                                <div class="my-2">{{ $row->bentuk_usaha }}</div>
                            </div>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Kualifikasi Usaha</div>
                                <div class="my-2">{{ $row->kualifikasi_usaha }}</div>
                            </div>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Perizinan Berusaha</div>
                                <div class="my-2">{{ $row->perizinan_berusaha }}</div>
                            </div>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">NIB ( Nomor Induk Berusaha )</div>
                                <div class="my-2"><a href="/storage/{{ $row->nib }}" class="btn btn-success"
                                        target="blank">Lihat..</a>
                                    <a href="#" class="btn btn-warning" target="blank">Download..</a>
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">NPWP Perusahaan</div>
                                <div class="my-2"><a href="/storage/{{ $row->npwp_perusahaan }}" class="btn btn-success"
                                        target="blank">Lihat..</a>
                                    <a href="#" class="btn btn-warning" target="blank">Download..</a>
                                </div>
                            </div>
                        </li>

                    </div>

                    <div class="col-lg-6 myBorder">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Sertifikat Badan Usaha</div>
                                <div class="my-2"><a href="/storage/{{ $row->sertifikat_badan_usaha }}"
                                        class="btn btn-success" target="blank">Lihat..</a>
                                    <a href="#" class="btn btn-warning" target="blank">Download..</a>
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Nomor, Tanggal Akta Pendirian, dan Nama Notaris</div>
                                <div class="my-2">{{ $row->no_tglAkta_namaNotaris }}</div>
                            </div>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Lama Pendirian Badan Usaha</div>
                                <div class="my-2">{{ $row->lama_pendirian_badan_usaha }}</div>
                            </div>
                        </li>

                        @if ($row->lama_pendirian_badan_usaha == 'Lebih dari 3 tahun')
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Riwayat Pengalaman Badan Usaha (Pekerjaan sejenis)</div>
                                    <div class="my-2"><a href="/storage/{{ $row->riwayat_pengalaman_badan_usaha }}"
                                            class="btn btn-success" target="blank">Lihat..</a>
                                        <a href="#" class="btn btn-warning" target="blank">Download..</a>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Dokumen Berita Acara Serah Terima Pekerjaan (PHO)</div>
                                    <div class="my-2"><a href="/storage/{{ $row->dokumen_berita_acara_serah_terima }}"
                                            class="btn btn-success" target="blank">Lihat..</a>
                                        <a href="#" class="btn btn-warning" target="blank">Download..</a>
                                    </div>
                                </div>
                            </li>
                        @endif

                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Dokumen Kontrak K3 Konstruksi</div>
                                <div class="my-2"><a href="/storage/{{ $row->dokumen_kontrak_k3 }}"
                                        class="btn btn-success" target="blank">Lihat..</a>
                                    <a href="#" class="btn btn-warning" target="blank">Download..</a>
                                </div>
                            </div>
                        </li>
                    </div>

                    <div class="col-lg-12 my-3  ">
                        <a href="/admin/detail/{{ $id }}" class="btn btn-primary mt-2">
                            Back
                        </a>
                        <a href="/admin/detail3/{{ $id }}" class="btn btn-primary mt-2">
                            Next
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
