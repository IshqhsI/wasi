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
                                <label class="fw-bold" for="klasifikasi_usaha">Klasifikasi Usaha Pekerjaan
                                    Konstruksi</label>
                                <div class="form-group my-2 radio">
                                    <input class="form-check-input " type="radio" name="klasifikasi_usaha" id="gedung"
                                        value="Bangunan Gedung">
                                    <label class="form-check-label" for="gedung">
                                        Bangunan Gedung
                                    </label>
                                    <br>
                                    <input class="form-check-input" type="radio" name="klasifikasi_usaha" id="sipil"
                                        value="Bangunan Sipil">
                                    <label class="form-check-label" for="sipil">
                                        Bangunan Sipil
                                    </label>
                                </div>
                            </div>

                            <div class="form-group my-2">
                                <label class="fw-bold" for="bentuk_usaha">Bentuk Usaha Jasa Konstruksi</label>
                                <div class="form-group my-2 radio">
                                    <input class="form-check-input " type="radio" name="bentuk_usaha" id="perseorangan"
                                        value="Orang Perseorangan">
                                    <label class="form-check-label" for="perseorangan">
                                        Orang Perseorangan
                                    </label>
                                    <br>
                                    <input class="form-check-input" type="radio" name="bentuk_usaha" id="badan_usaha"
                                        value="Badan Usaha">
                                    <label class="form-check-label" for="badan_usaha">
                                        Bangunan Sipil
                                    </label>
                                </div>
                            </div>

                            <div class="form-group my-2">
                                <label class="fw-bold" for="kualifikasi_usaha">Kualifikasi Usaha</label>
                                <div class="form-group my-2 radio">
                                    <input class="form-check-input " type="radio" name="kualifikasi_usaha" id="kecil"
                                        value="Kecil">
                                    <label class="form-check-label" for="kecil">
                                        Kecil
                                    </label>
                                    <br>
                                    <input class="form-check-input " type="radio" name="kualifikasi_usaha" id="menengah"
                                        value="Menengah">
                                    <label class="form-check-label" for="menengah">
                                        Menengah
                                    </label>
                                    <br>
                                    <input class="form-check-input " type="radio" name="kualifikasi_usaha" id="besar"
                                        value="Besar">
                                    <label class="form-check-label" for="besar">
                                        Besar
                                    </label>
                                </div>
                            </div>

                            <div class="form-group my-2">
                                <label class="fw-bold" for="perizinan_berusaha">Perizinan Berusaha</label>
                                <div class="form-group my-2 radio">
                                    <input class="form-check-input " type="radio" name="perizinan_berusaha" id="ada"
                                        value="Ada">
                                    <label class="form-check-label" for="ada">
                                        Ada
                                    </label>
                                    <br>
                                    <input class="form-check-input" type="radio" name="perizinan_berusaha" id="tidak_ada"
                                        value="Tidak Ada">
                                    <label class="form-check-label" for="tidak_ada">
                                        Tidak Ada
                                    </label>
                                </div>
                            </div>

                            <div class="form-group my-2">
                                <label class="fw-bold" for="nib">NIB ( Nomor Induk Berusaha )</label>
                                <div class="input-group my-2">
                                    <input type="file" class="form-control" id="nib" name="nib">
                                    <label class="input-group-text" for="nib">Upload</label>
                                </div>
                            </div>

                            <div class="form-group my-2">
                                <label class="fw-bold" for="npwp_perusahaan">NPWP Perusahaan</label>
                                <div class="input-group my-2">
                                    <input type="file" class="form-control" id="npwp_perusahaan"
                                        name="npwp_perusahaan">
                                    <label class="input-group-text" for="npwp_perusahaan">Upload</label>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 myBorder">
                            <div class="form-group my-2">
                                <label class="fw-bold" for="sertifikat_badan_usaha">Sertifikat Badan Usaha</label>
                                <div class="input-group my-2">
                                    <input type="file" class="form-control" id="sertifikat_badan_usaha"
                                        name="sertifikat_badan_usaha">
                                    <label class="input-group-text" for="sertifikat_badan_usaha">Upload</label>
                                </div>
                            </div>

                            <label class="fw-bold" for="tglKontrak">Tanggal Kontrak</label>
                            <div class="form-group my-2">
                                <div class='input-group' id='tglKontrak'>
                                    <input type='date' class="form-control" name="tglKontrak" />
                                    <span class="input-group-text">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <label class="fw-bold" for="no_tglAkta_namaNotaris">Nomor, Tanggal Akta Pendirian, dan Nama
                                Notaris</label>
                            <input type="text" name="no_tglAkta_namaNotaris" id="no_tglAkta_namaNotaris"
                                class="form-control my-2">

                            <div class="form-group my-2">
                                <label class="fw-bold" for="lama_pendirian_badan_usaha">Lama Pendirian Badan Usaha</label>
                                <div class="form-group my-2 radio">
                                    <input class="form-check-input cek" type="radio" name="lama_pendirian_badan_usaha"
                                        id="kurang_dari_sama_dengan_3" value="Kurang dari/ sama dengan 3 tahun">
                                    <label class="form-check-label" for="kurang_dari_sama_dengan_3">
                                        Kurang dari/ sama dengan 3 tahun
                                    </label>
                                    <br>
                                    <input class="form-check-input cek" type="radio" name="lama_pendirian_badan_usaha"
                                        id="lebih_dari_3" value="Lebih dari 3 tahun">
                                    <label class="form-check-label" for="lebih_dari_3">
                                        Lebih dari 3 tahun
                                    </label>
                                </div>
                            </div>

                            <div class="form-group my-2 lebihdariTiga">
                                <label class="fw-bold" for="riwayat_pengalaman_badan_usaha">Riwayat Pengalaman Badan Usaha
                                    (Pekerjaan
                                    sejenis)</label>
                                <div class="input-group my-2">
                                    <input type="file" class="form-control" id="riwayat_pengalaman_badan_usaha"
                                        name="riwayat_pengalaman_badan_usaha">
                                    <label class="input-group-text" for="riwayat_pengalaman_badan_usaha">Upload</label>
                                </div>
                            </div>

                            <div class="form-group my-2 lebihdariTiga">
                                <label class="fw-bold" for="dokumen_berita_acara_serah_terima">Dokumen Berita Acara Serah
                                    Terima Pekerjaan (PHO)</label>
                                <div class="input-group my-2">
                                    <input type="file" class="form-control" id="dokumen_berita_acara_serah_terima"
                                        name="dokumen_berita_acara_serah_terima">
                                    <label class="input-group-text" for="dokumen_berita_acara_serah_terima">Upload</label>
                                </div>
                            </div>

                            <div class="form-group my-2">
                                <label class="fw-bold" for="dokumen_kontrak_k3">Dokumen Kontrak K3 Konstruksi</label>
                                <div class="input-group my-2">
                                    <input type="file" class="form-control" id="dokumen_kontrak_k3"
                                        name="dokumen_kontrak_k3">
                                    <label class="input-group-text" for="dokumen_kontrak_k3">Upload</label>
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
