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
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
                                <div class="fw-bold">Email</div>
                                <div class="my-2">{{ $email->email }}</div>
                            </div>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Dinas / Pengguna Jasa</div>
                                <div class="my-2">{{ $row->dinas }}</div>
                            </div>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Pejabat Pembuat Komitmen</div>
                                <div class="my-2">{{ $row->pejabat_pembuat_komitmen }}</div>
                            </div>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Nama Paket Pekerjaan</div>
                                <div class="my-2">{{ $row->nama_paket_pekerjaan }}</div>
                            </div>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Lokasi Pekerjaan</div>
                                <div class="my-2">{{ $row->lokasi_pekerjaan }}</div>
                            </div>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Nama Perusahaan</div>
                                <div class="my-2">{{ $row->nama_perusahaan }}</div>
                            </div>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Alamat Perusahaan</div>
                                <div class="my-2">{{ $row->alamat_perusahaan }}</div>
                            </div>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Proses Pemilihan Penyedia</div>
                                <div class="my-2">{{ $row->proses_pemilihan_penyedia }}</div>
                            </div>
                        </li>
                    </div>
                </div>

                <div class="col-lg-6 myBorder">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Nomor Kontrak</div>
                            <div class="my-2">{{ $row->nomor_kontrak }}</div>
                        </div>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Tanggal Kontrak</div>
                            <div class="my-2">{{ $row->tanggal_kontrak }}</div>
                        </div>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Nilai Kontrak</div>
                            <div class="my-2">{{ $row->nilai_kontrak }}</div>
                        </div>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Jenis Kontrak</div>
                            <div class="my-2">{{ $row->jenis_kontrak }}</div>
                        </div>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Kompleksitas Pekerjaan</div>
                            <div class="my-2">{{ $row->kompleksitas_pekerjaan }}</div>
                        </div>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Dokumen Kontrak</div>
                            <div class="my-2"><a href="/../../storage/{{ $row->dokumen_kontrak }}"
                                    class="btn btn-success" target="blank">Lihat..</a>
                                <a href="#" class="btn btn-warning" target="blank">Download..</a>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Metode Pembayaran Pekerjaan</div>
                            <div class="my-2">{{ $row->metode_pembayaran_pekerjaan }}</div>
                        </div>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Konsultan Pengawas</div>
                            <div class="my-2">{{ $row->konsultan_pengawas }}</div>
                        </div>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Konsultan Perencanaan</div>
                            <div class="my-2">{{ $row->konsultan_perencana }}</div>
                        </div>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Waktu Pelaksanaan</div>
                            <div class="my-2">{{ $row->waktu_pelaksanaan_kerja }}</div>
                        </div>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Jadwal Pelaksanaan Pekerjaan</div>
                            <div class="my-2"><a href="/../../storage/{{ $row->jadwal_pelaksanaan_pekerjaan }}"
                                    class="btn btn-success" target="blank">Lihat..</a>
                                <a href="#" class="btn btn-warning" target="blank">Download..</a>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Sumber Dana</div>
                            <div class="my-2">{{ $row->sumber_dana }}</div>
                        </div>
                    </li>

                </div>

                <div class="col-lg-12 my-3  ">
                    <a href="/admin/detail2/{{ $id }}" class="btn btn-primary mt-2">
                        Next
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
