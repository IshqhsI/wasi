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
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>

        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="9999999">
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
                                        <input type="email" name="email" id="email" class="form-control my-2"
                                            value="{{ Auth::user()->email }}" readonly>

                                        <label class="fw-bold" for="dinas">Dinas / Pengguna Jasa</label>
                                        <input type="text" name="dinas" id="dinas" class="form-control my-2"
                                            value="{{ $paket->dinas }}">

                                        <label class="fw-bold" for="ppk">Pejabat Pembuat Komitmen</label>
                                        <input type="text" name="ppk" id="ppk" class="form-control my-2"
                                            value="{{ $paket->pejabat_pembuat_komitmen }}">

                                        <label class="fw-bold" for="namaPaket">Nama Paket Pekerjaan</label>
                                        <input type="text" name="namaPaket" id="namaPaket" class="form-control my-2"
                                            value="{{ $paket->nama_paket_pekerjaan }}">

                                        <label class="fw-bold" for="lokasi">Lokasi Pekerjaan</label>
                                        <input type="text" name="lokasi" id="lokasi" class="form-control my-2"
                                            value="{{ $paket->lokasi_pekerjaan }}">

                                        <div class="form-group my-2">
                                            <label class="fw-bold" for="kompleksPekerjaan">Kompleksitas Pekerjaan</label>
                                            <div class="form-group my-2 radio">
                                                <input class="form-check-input " type="radio" name="kompleksPekerjaan"
                                                    id="komplek" value="Komplek"
                                                    @php echo ($paket->kompleksitas_pekerjaan == 'Komplek') ? 'checked' : '' @endphp>
                                                <label class="form-check-label" for="komplek">
                                                    Komplek
                                                </label>
                                                <input class="form-check-input" type="radio" name="kompleksPekerjaan"
                                                    id="sederhana" value="Sederhana"
                                                    @php echo ($paket->kompleksitas_pekerjaan == 'Sederhana') ? 'checked' : '' @endphp>
                                                <label class="form-check-label" for="sederhana">
                                                    Sederhana
                                                </label>
                                            </div>
                                        </div>

                                        <label class="fw-bold" for="namaPerusahaan">Nama Perusahaan</label>
                                        <input type="text" name="namaPerusahaan" id="namaPerusahaan"
                                            class="form-control my-2" value="{{ $paket->nama_perusahaan }}">

                                        <label class="fw-bold" for="alamatPerusahaan">Alamat Perusahaan</label>
                                        <input type="text" name="alamatPerusahaan" id="alamatPerusahaan"
                                            class="form-control my-2" value="{{ $paket->alamat_perusahaan }}">

                                        <div class="form-group my-2">
                                            <label class="fw-bold" for="prosesPilihPenyedia">Proses Pemilihan
                                                Penyedia</label>
                                            <div class="form-group mt-2">
                                                <input class="form-check-input " type="checkbox" name="prosesPilihPenyedia"
                                                    id="tender" value="Tender"
                                                    @php echo ($paket->proses_pemilihan_penyedia == 'Tender') ? 'checked' : '' @endphp>
                                                <label class="form-check-label" for="tender">
                                                    Tender
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-check-input" type="checkbox"
                                                    name="prosesPilihPenyedia" id="pengadaanLangsung"
                                                    value="Pengadaan Langsung"
                                                    @php echo ($paket->proses_pemilihan_penyedia == 'Pengadaan Langsung') ? 'checked' : '' @endphp>
                                                <label class="form-check-label" for="pengadaanLangsung">
                                                    Pengadaan Langsung
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-check-input" type="checkbox"
                                                    name="prosesPilihPenyedia" id="penunjukanLangsung"
                                                    value="Penunjukan Langsung"
                                                    @php echo ($paket->proses_pemilihan_penyedia == 'Penunjukan Langsung') ? 'checked' : '' @endphp>
                                                <label class="form-check-label" for="penunjukanLangsung">
                                                    Penunjukan Langsung
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group my-2">
                                            <label class="fw-bold" for="metodePembayaran">Metode Pembayaran
                                                Pekerjaan</label>
                                            <div class="form-group my-2 radio">
                                                <input class="form-check-input " type="radio" name="metodePembayaran"
                                                    id="sertifikatBulanan"
                                                    value="Monthly Certificate ( Sertifikat Bulanan )"
                                                    @php echo ($paket->metode_pembayaran_pekerjaan == 'Monthly Certificate ( Sertifikat Bulanan )') ? 'checked' : '' @endphp>
                                                <label class="form-check-label me-4" for="sertifikatBulanan">
                                                    Monthly Certificate ( Sertifikat Bulanan )
                                                </label> <br>
                                                <input class="form-check-input" type="radio" name="metodePembayaran"
                                                    id="termin" value="Termin"
                                                    @php echo ($paket->metode_pembayaran_pekerjaan == 'Termin') ? 'checked' : '' @endphp>
                                                <label class="form-check-label" for="termin">
                                                    Termin
                                                </label>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-6 myBorder">
                                        <label class="fw-bold" for="noKontrak">Nomor Kontrak</label>
                                        <input type="text" name="noKontrak" id="noKontrak" class="form-control my-2"
                                            value="{{ $paket->nomor_kontrak }}">

                                        <label class="fw-bold" for="tglKontrak">Tanggal Kontrak</label>
                                        <div class="form-group my-2">
                                            <div class='input-group' id='tglKontrak'>
                                                <input type='date' class="form-control" name="tglKontrak"
                                                    value="{{ $paket->tanggal_kontrak }}" />
                                                <span class="input-group-text">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>

                                        <label class="fw-bold" for="nilaiKontrak">Nilai Kontrak</label>
                                        <input type="text" name="nilaiKontrak" id="nilaiKontrak"
                                            class="form-control my-2" value="{{ $paket->nilai_kontrak }}">

                                        <div class="form-group">
                                            <label class="fw-bold" for="jenisKontrak">Jenis Kontrak</label>
                                            <div class="form-group my-2 radio">
                                                <input class="form-check-input " type="radio" name="jenisKontrak"
                                                    id="tahunTunggal" value="Tahun Tunggal"
                                                    @php echo ($paket->jenis_kontrak == 'Tahun Tunggal') ? 'checked' : '' @endphp>
                                                <label class="form-check-label me-4" for="tahunTunggal">
                                                    Tahun Tunggal
                                                </label>
                                                <input class="form-check-input" type="radio" name="jenisKontrak"
                                                    value="Tahun Jamak" id="tahunJamak"
                                                    @php echo ($paket->jenis_kontrak == 'Tahun Jamak') ? 'checked' : '' @endphp>
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
                                                <input type="hidden" class="form-control" id="dokumenKontrak"
                                                    name="dokumenKontrakDefault" value="{{ $paket->dokumen_kontrak }}">
                                                <label class="input-group-text" for="dokumenKontrak">Upload</label>
                                            </div>
                                            <a href="/../../storage/{{ $paket->dokumen_kontrak }}"
                                                class="text-decoration-none" target="blank">Dokumen</a>

                                        </div>

                                        <label class="fw-bold" for="konsultanPengawas">Konsultan Pengawas</label>
                                        <input type="text" name="konsultanPengawas" id="konsultanPengawas"
                                            class="form-control my-2" value="{{ $paket->konsultan_pengawas }}">

                                        <label class="fw-bold" for="konsultanPerencana">Konsultan Perencana</label>
                                        <input type="text" name="konsultanPerencana" id="konsultanPerencana"
                                            class="form-control my-2" value="{{ $paket->konsultan_perencana }}">

                                        <label class="fw-bold" for="waktuPelaksanaanKerja">Waktu Pelaksanaan Kerja</label>
                                        <input type="text" name="waktuPelaksanaanKerja" id="waktuPelaksanaanKerja"
                                            class="form-control my-2" value="{{ $paket->waktu_pelaksanaan_kerja }}">

                                        <div class="form-group my-2">
                                            <label class="fw-bold" for="jadwalPelaksanaanPekerjaan">Jadwal Pelaksanaan
                                                Pekerjaan</label>
                                            <div class="input-group my-2">
                                                <input type="file" class="form-control"
                                                    id="jadwalPelaksanaanPekerjaan" name="jadwalPelaksanaanPekerjaan">
                                                <input type="hidden" class="form-control"
                                                    id="jadwalPelaksanaanPekerjaan"
                                                    name="jadwalPelaksanaanPekerjaanDefault"
                                                    value={{ $paket->jadwal_pelaksanaan_pekerjaan }}>
                                                <label class="input-group-text"
                                                    for="jadwalPelaksanaanPekerjaan">Upload</label>
                                            </div>
                                            <a href="/../../storage/{{ $paket->jadwal_pelaksanaan_pekerjaan }}"
                                                class="text-decoration-none" target="blank">Dokumen</a>
                                        </div>

                                        <div class="form-group">
                                            <label class="fw-bold" for="sumberDana">Sumber Dana</label>
                                            <div class="form-group my-2 radio">
                                                <input class="form-check-input " type="radio" name="sumberDana"
                                                    id="apbn" value="APBN"
                                                    @php echo ($paket->sumber_dana == 'APBN') ? 'checked' : '' @endphp>
                                                <label class="form-check-label" for="apbn">
                                                    APBN
                                                </label>
                                                <br>
                                                <input class="form-check-input" type="radio" name="sumberDana"
                                                    id="apbd" value="APBD"
                                                    @php echo ($paket->sumber_dana == 'APBD') ? 'checked' : '' @endphp>
                                                <label class="form-check-label" for="apbd">
                                                    APBD
                                                </label>
                                                <br>

                                                <input class="form-check-input" type="radio" name="sumberDana"
                                                    id="swasta" value="Swasta"
                                                    @php echo ($paket->sumber_dana == 'Swasta') ? 'checked' : '' @endphp>
                                                <label class="form-check-label" for="swasta">
                                                    Swasta
                                                </label>
                                                <br>
                                                <input class="form-check-input" type="radio" name="sumberDana"
                                                    id="hibah" value="Hibah"
                                                    @php echo ($paket->sumber_dana == 'Hibah') ? 'checked' : '' @endphp>
                                                <label class="form-check-label" for="hibah">
                                                    Hibah
                                                </label>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-12 my-3 text-center">
                                        <button type="submit" class="btn btn-primary mt-2 px-5 text-center">
                                            Edit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="9999999">
                    {{-- Content --}}
                    <div class="card shadow">
                        <div class="card-header bg-primary text-light">
                            Data Paket Pekerjaan
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <form action="/admin/edit/tertib/{{ $id }}" method="post" class="row"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('post')
                                    <div class="col-lg-6">
                                        <div class="form-group my-2">
                                            <label class="fw-bold" for="klasifikasi_usaha">Klasifikasi Usaha Pekerjaan
                                                Konstruksi</label>
                                            <div class="form-group my-2 radio">
                                                <input class="form-check-input " type="radio" name="klasifikasi_usaha"
                                                    id="gedung" value="Bangunan Gedung"
                                                    @php echo ($tUsaha->klasifikasi_usaha == 'Bangunan Gedung') ? 'checked' : '' @endphp>
                                                <label class="form-check-label" for="gedung">
                                                    Bangunan Gedung
                                                </label>
                                                <br>
                                                <input class="form-check-input" type="radio" name="klasifikasi_usaha"
                                                    id="sipil" value="Bangunan Sipil"
                                                    @php echo ($tUsaha->klasifikasi_usaha == 'Bangunan Sipil') ? 'checked' : '' @endphp>
                                                <label class="form-check-label" for="sipil">
                                                    Bangunan Sipil
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group my-2">
                                            <label class="fw-bold" for="bentuk_usaha">Bentuk Usaha Jasa Konstruksi</label>
                                            <div class="form-group my-2 radio">
                                                <input class="form-check-input " type="radio" name="bentuk_usaha"
                                                    id="perseorangan" value="Orang Perseorangan"
                                                    @php echo ($tUsaha->bentuk_usaha == 'Orang Perseorangan') ? 'checked' : '' @endphp>
                                                <label class="form-check-label" for="perseorangan">
                                                    Orang Perseorangan
                                                </label>
                                                <br>
                                                <input class="form-check-input" type="radio" name="bentuk_usaha"
                                                    id="badan_usaha" value="Badan Usaha"
                                                    @php echo ($tUsaha->bentuk_usaha == 'Badan Usaha') ? 'checked' : '' @endphp>
                                                <label class="form-check-label" for="badan_usaha">
                                                    Bangunan Sipil
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group my-2">
                                            <label class="fw-bold" for="kualifikasi_usaha">Kualifikasi Usaha</label>
                                            <div class="form-group my-2 radio">
                                                <input class="form-check-input " type="radio" name="kualifikasi_usaha"
                                                    id="kecil" value="Kecil"
                                                    @php echo ($tUsaha->kualifikasi_usaha == 'Kecil') ? 'checked' : '' @endphp>
                                                <label class="form-check-label" for="kecil">
                                                    Kecil
                                                </label>
                                                <br>
                                                <input class="form-check-input " type="radio" name="kualifikasi_usaha"
                                                    id="menengah" value="Menengah"
                                                    @php echo ($tUsaha->kualifikasi_usaha == 'Menengah') ? 'checked' : '' @endphp>
                                                <label class="form-check-label" for="menengah">
                                                    Menengah
                                                </label>
                                                <br>
                                                <input class="form-check-input " type="radio" name="kualifikasi_usaha"
                                                    id="besar" value="Besar"
                                                    @php echo ($tUsaha->kualifikasi_usaha == 'Besar') ? 'checked' : '' @endphp>
                                                <label class="form-check-label" for="besar">
                                                    Besar
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group my-2">
                                            <label class="fw-bold" for="perizinan_berusaha">Perizinan Berusaha</label>
                                            <div class="form-group my-2 radio">
                                                <input class="form-check-input " type="radio" name="perizinan_berusaha"
                                                    id="ada" value="Ada"
                                                    @php echo ($tUsaha->perizinan_berusaha == 'Ada') ? 'checked' : '' @endphp>
                                                <label class="form-check-label" for="ada">
                                                    Ada
                                                </label>
                                                <br>
                                                <input class="form-check-input" type="radio" name="perizinan_berusaha"
                                                    id="tidak_ada" value="Tidak Ada"
                                                    @php echo ($tUsaha->perizinan_berusaha == 'Tidak Ada') ? 'checked' : '' @endphp>
                                                <label class="form-check-label" for="tidak_ada">
                                                    Tidak Ada
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group my-2">
                                            <label class="fw-bold" for="nib">NIB ( Nomor Induk Berusaha )</label>
                                            <div class="input-group my-2">
                                                <input type="file" class="form-control" id="nib"
                                                    name="nib">
                                                <input type="hidden" class="form-control" id="nib"
                                                    name="nibDefault" value="{{ $tUsaha->nib }}">
                                                <label class="input-group-text" for="nib">Upload</label>
                                            </div>
                                            <a href="/../../storage/{{ $tUsaha->nib }}" class="text-decoration-none"
                                                target="blank">Dokumen</a>
                                        </div>

                                        <div class="form-group my-2">
                                            <label class="fw-bold" for="npwp_perusahaan">NPWP Perusahaan</label>
                                            <div class="input-group my-2">
                                                <input type="file" class="form-control" id="npwp_perusahaan"
                                                    name="npwp_perusahaan">
                                                <input type="hidden" class="form-control" id="npwp_perusahaan"
                                                    name="npwp_perusahaanDefault" value={{ $tUsaha->npwp_perusahaan }}>
                                                <label class="input-group-text" for="npwp_perusahaan">Upload</label>
                                            </div>
                                            <a href="/../../storage/{{ $tUsaha->npwp_perusahaan }}"
                                                class="text-decoration-none" target="blank">Dokumen</a>
                                        </div>

                                    </div>

                                    <div class="col-lg-6 myBorder">
                                        <div class="form-group my-2">
                                            <label class="fw-bold" for="sertifikat_badan_usaha">Sertifikat Badan
                                                Usaha</label>
                                            <div class="input-group my-2">
                                                <input type="file" class="form-control" id="sertifikat_badan_usaha"
                                                    name="sertifikat_badan_usaha">
                                                <input type="hidden" class="form-control" id="sertifikat_badan_usaha"
                                                    name="sertifikat_badan_usahaDefault"
                                                    value={{ $tUsaha->sertifikat_badan_usaha }}>
                                                <label class="input-group-text"
                                                    for="sertifikat_badan_usaha">Upload</label>
                                            </div>
                                            <a href="/../../storage/{{ $tUsaha->sertifikat_badan_usaha }}"
                                                class="text-decoration-none" target="blank">Dokumen</a>
                                        </div>

                                        <label class="fw-bold" for="no_tglAkta_namaNotaris">Nomor, Tanggal Akta Pendirian,
                                            dan Nama
                                            Notaris</label>
                                        <input type="text" name="no_tglAkta_namaNotaris" id="no_tglAkta_namaNotaris"
                                            class="form-control my-2" value="{{ $tUsaha->no_tglAkta_namaNotaris }}">

                                        <div class="form-group my-2">
                                            <label class="fw-bold" for="lama_pendirian_badan_usaha">Lama Pendirian Badan
                                                Usaha</label>
                                            <div class="form-group my-2 radio">
                                                <input class="form-check-input cek" type="radio"
                                                    name="lama_pendirian_badan_usaha" id="kurang_dari_sama_dengan_3"
                                                    value="Kurang dari/ sama dengan 3 tahun"
                                                    @php echo ($tUsaha->lama_pendirian_badan_usaha == 'Kurang dari/ sama dengan 3 tahun') ? 'checked' : '' @endphp>
                                                <label class="form-check-label" for="kurang_dari_sama_dengan_3">
                                                    Kurang dari/ sama dengan 3 tahun
                                                </label>
                                                <br>
                                                <input class="form-check-input cek" type="radio"
                                                    name="lama_pendirian_badan_usaha" id="lebih_dari_3"
                                                    value="Lebih dari 3 tahun"
                                                    @php echo ($tUsaha->lama_pendirian_badan_usaha == 'Lebih dari 3 tahun') ? 'checked' : '' @endphp>
                                                <label class="form-check-label" for="lebih_dari_3">
                                                    Lebih dari 3 tahun
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group my-2 lebihdariTiga">
                                            <label class="fw-bold" for="riwayat_pengalaman_badan_usaha">Riwayat Pengalaman
                                                Badan Usaha
                                                (Pekerjaan
                                                sejenis)</label>
                                            <div class="input-group my-2">
                                                <input type="file" class="form-control"
                                                    id="riwayat_pengalaman_badan_usaha"
                                                    name="riwayat_pengalaman_badan_usaha">
                                                <input type="hidden" class="form-control"
                                                    id="riwayat_pengalaman_badan_usaha"
                                                    name="riwayat_pengalaman_badan_usahaDefault"
                                                    value="{{ $tUsaha->riwayat_pengalaman_badan_usaha }}">
                                                <label class="input-group-text"
                                                    for="riwayat_pengalaman_badan_usaha">Upload</label>
                                            </div>
                                            <a href="/../../storage/{{ $tUsaha->riwayat_pengalaman_badan_usaha }}"
                                                class="text-decoration-none" target="blank">Dokumen</a>
                                        </div>

                                        <div class="form-group my-2 lebihdariTiga">
                                            <label class="fw-bold" for="dokumen_berita_acara_serah_terima">Dokumen Berita
                                                Acara Serah
                                                Terima Pekerjaan (PHO)</label>
                                            <div class="input-group my-2">
                                                <input type="file" class="form-control"
                                                    id="dokumen_berita_acara_serah_terima"
                                                    name="dokumen_berita_acara_serah_terima">
                                                <input type="hidden" class="form-control"
                                                    id="dokumen_berita_acara_serah_terima"
                                                    name="dokumen_berita_acara_serah_terimaDefault"
                                                    value="{{ $tUsaha->dokumen_berita_acara_serah_terima }}">
                                                <label class="input-group-text"
                                                    for="dokumen_berita_acara_serah_terima">Upload</label>
                                            </div>
                                            <a href="/../../storage/{{ $tUsaha->dokumen_berita_acara_serah_terima }}"
                                                class="text-decoration-none" target="blank">Dokumen</a>
                                        </div>

                                        <div class="form-group my-2">
                                            <label class="fw-bold" for="dokumen_kontrak_k3">Dokumen Kontrak K3
                                                Konstruksi</label>
                                            <div class="input-group my-2">
                                                <input type="file" class="form-control" id="dokumen_kontrak_k3"
                                                    name="dokumen_kontrak_k3">
                                                <input type="hidden" class="form-control" id="dokumen_kontrak_k3"
                                                    name="dokumen_kontrak_k3Default"
                                                    value="{{ $tUsaha->dokumen_kontrak_k3 }}">
                                                <label class="input-group-text" for="dokumen_kontrak_k3">Upload</label>
                                            </div>
                                            <a href="/../../storage/{{ $tUsaha->dokumen_kontrak_k3 }}"
                                                class="text-decoration-none" target="blank">Dokumen</a>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 my-3 text-center">
                                        <button type="submit" class="btn btn-primary mt-2 mx-5">
                                            Edit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="9999999">
                    {{-- Content --}}
                    <div class="card shadow">
                        <div class="card-header bg-primary text-light">
                            Data Paket Pekerjaan
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <form action="/admin/edit/penyelenggaraan/{{ $id }}" method="post"
                                    class="row" enctype="multipart/form-data">
                                    @csrf
                                    @method('post')
                                    <div class="col-lg-6">
                                        <div class="form-group my-2">
                                            <label class="fw-bold" for="jaminan_pelaksanaan">Jaminan Pelaksanaan</label>
                                            <div class="form-group my-2 radio">
                                                <input class="form-check-input " type="radio"
                                                    name="jaminan_pelaksanaan" id="perbankan" value="Perbankan"
                                                    @php echo ($tPenyelenggaraan->jaminan_pelaksanaan == 'Perbankan') ? 'checked' : '' @endphp>
                                                <label class="form-check-label" for="perbankan">
                                                    Perbankan
                                                </label>
                                                <br>
                                                <input class="form-check-input " type="radio"
                                                    name="jaminan_pelaksanaan" id="perusahaan_asuransi"
                                                    value="Perusahaan Asuransi"
                                                    @php echo ($tPenyelenggaraan->jaminan_pelaksanaan == 'Perusahaan Asuransi') ? 'checked' : '' @endphp>
                                                <label class="form-check-label" for="perusahaan_asuransi">
                                                    Perusahaan Asuransi
                                                </label>
                                                <br>
                                                <input class="form-check-input " type="radio"
                                                    name="jaminan_pelaksanaan" id="perusahaan_penjaminan"
                                                    value="Perusahaan Penjaminan"
                                                    @php echo ($tPenyelenggaraan->jaminan_pelaksanaan == 'Perusahaan Penjaminan') ? 'checked' : '' @endphp>
                                                <label class="form-check-label" for="perusahaan_penjaminan">
                                                    Perusahaan Penjaminan
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group my-2">
                                            <label class="fw-bold" for="dokumen_jaminan_pelaksanaan">Dokumen Jaminan
                                                Pelaksanaan</label>
                                            <div class="input-group my-2">
                                                <input type="file" class="form-control"
                                                    id="dokumen_jaminan_pelaksanaan" name="dokumen_jaminan_pelaksanaan">
                                                <input type="hidden" class="form-control"
                                                    id="dokumen_jaminan_pelaksanaan"
                                                    name="dokumen_jaminan_pelaksanaanDefault"
                                                    value={{ $tPenyelenggaraan->dokumen_jaminan_pelaksanaan }}>
                                                <label class="input-group-text"
                                                    for="dokumen_jaminan_pelaksanaan">Upload</label>
                                            </div>
                                            <a href="/../../storage/{{ $tPenyelenggaraan->dokumen_jaminan_pelaksanaan }}"
                                                class="text-decoration-none" target="blank">Dokumen</a>
                                        </div>

                                        <div class="form-group my-2">
                                            <label class="fw-bold" for="jaminan_uang_muka">Jaminan Uang Muka</label>
                                            <div class="form-group my-2 radio">
                                                <input class="form-check-input " type="radio" name="jaminan_uang_muka"
                                                    id="perbankan2" value="Perbankan"
                                                    @php echo ($tPenyelenggaraan->jaminan_uang_muka == 'Perbankan') ? 'checked' : '' @endphp>
                                                <label class="form-check-label" for="perbankan2">
                                                    Perbankan
                                                </label>
                                                <br>
                                                <input class="form-check-input " type="radio" name="jaminan_uang_muka"
                                                    id="perusahaan_asuransi2" value="Perusahaan Asuransi"
                                                    @php echo ($tPenyelenggaraan->jaminan_uang_muka == 'Perusahaan Asuransi') ? 'checked' : '' @endphp>
                                                <label class="form-check-label" for="perusahaan_asuransi2">
                                                    Perusahaan Asuransi
                                                </label>
                                                <br>
                                                <input class="form-check-input " type="radio" name="jaminan_uang_muka"
                                                    id="perusahaan_penjaminan2" value="Perusahaan Penjaminan"
                                                    @php echo ($tPenyelenggaraan->jaminan_uang_muka == 'Perusahaan Penjaminan') ? 'checked' : '' @endphp>
                                                <label class="form-check-label" for="perusahaan_penjaminan2">
                                                    Perusahaan Penjaminan
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group my-2">
                                            <label class="fw-bold" for="dokumen_jaminan_uang_muka">Dokumen Jaminan Uang
                                                Muka</label>
                                            <div class="input-group my-2">
                                                <input type="file" class="form-control" id="dokumen_jaminan_uang_muka"
                                                    name="dokumen_jaminan_uang_muka">
                                                <input type="hidden" class="form-control" id="dokumen_jaminan_uang_muka"
                                                    name="dokumen_jaminan_uang_mukaDefault"
                                                    value={{ $tPenyelenggaraan->dokumen_jaminan_uang_muka }}>
                                                <label class="input-group-text"
                                                    for="dokumen_jaminan_uang_muka">Upload</label>
                                            </div>
                                            <a href="/../../storage/{{ $tPenyelenggaraan->dokumen_jaminan_uang_muka }}"
                                                class="text-decoration-none" target="blank">Dokumen</a>
                                        </div>

                                        <label class="fw-bold" for="biaya_penyelenggaraan_smkk">Berapa Biaya
                                            Penyelenggaran SMKK
                                            sesuai
                                            Kontrak</label>
                                        <input type="text" name="biaya_penyelenggaraan_smkk"
                                            id="biaya_penyelenggaraan_smkk" class="form-control my-2"
                                            value="{{ $tPenyelenggaraan->biaya_penyelenggaraan_smkk }}">

                                        <label class="fw-bold" for="biaya_penyelenggaran_sesuai_permen">Apakah Biaya
                                            Penyelenggaraan
                                            SMKK
                                            tersebut sudah sesuai dengan Permen PUPR No. 10 Tahun 2021 Tentang Pedoman
                                            Sistem Manajemen
                                            Keselamatan Konstruksi (Termasuk Penyediaan APD)</label>
                                        <input type="text" name="biaya_penyelenggaran_sesuai_permen"
                                            id="biaya_penyelenggaran_sesuai_permen" class="form-control my-2"
                                            value={{ $tPenyelenggaraan->biaya_penyelenggaran_sesuai_permen }}>

                                        <div class="form-group my-2">
                                            <label class="fw-bold" for="bukti_pembayaran_asuransi_tenaga_kerja">Bukti
                                                Pembayaran
                                                Asuransi Tenaga Kerja</label>
                                            <div class="input-group my-2">
                                                <input type="file" class="form-control"
                                                    id="bukti_pembayaran_asuransi_tenaga_kerja"
                                                    name="bukti_pembayaran_asuransi_tenaga_kerja">
                                                <input type="hidden" class="form-control"
                                                    id="bukti_pembayaran_asuransi_tenaga_kerja"
                                                    name="bukti_pembayaran_asuransi_tenaga_kerjaDefault"
                                                    value={{ $tPenyelenggaraan->bukti_pembayaran_asuransi_tenaga_kerja }}>
                                                <label class="input-group-text"
                                                    for="bukti_pembayaran_asuransi_tenaga_kerja">Upload</label>
                                            </div>
                                            <a href="/../../storage/{{ $tPenyelenggaraan->bukti_pembayaran_asuransi_tenaga_kerja }}"
                                                class="text-decoration-none" target="blank">Dokumen</a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 myBorder">
                                        <label class="fw-bold" for="bahan_atau_material">Bahan atau material utama yang
                                            digunakan dalam pekerjaan konstruksi ini (Ex. Pasir, Besi, Batu, Tiang
                                            Pancang...etc)
                                            Tolong sebutkan minimal 5 jenis?</label>
                                        <input type="text" name="bahan_atau_material" id="bahan_atau_material"
                                            class="form-control my-2"
                                            value="{{ $tPenyelenggaraan->bahan_atau_material }}">


                                        <div class="form-group my-2">
                                            <label class="fw-bold" for="penggunaan_barang_material">Penggunaan barang/
                                                material</label>
                                            <div class="form-group my-2 radio">
                                                <input class="form-check-input " type="radio"
                                                    name="penggunaan_barang_material" id="dalam_negeri_100%"
                                                    value="Dalam Negeri 100%"
                                                    @php echo ($tPenyelenggaraan->penggunaan_barang_material == 'Dalam Negeri 100%') ? 'checked' : '' @endphp>
                                                <label class="form-check-label" for="dalam_negeri_100%">
                                                    Dalam Negeri 100%
                                                </label>
                                                <br>
                                                <input class="form-check-input" type="radio"
                                                    name="penggunaan_barang_material" id="luar_negeri"
                                                    value="Luar Negeri"
                                                    @php echo ($tPenyelenggaraan->penggunaan_barang_material == 'Luar Negeri') ? 'checked' : '' @endphp>
                                                <label class="form-check-label" for="luar_negeri">
                                                    Luar Negeri
                                                </label>
                                            </div>
                                        </div>

                                        <label class="fw-bold persen" for="persen_penggunaan_barang_material ">Berapa
                                            persen
                                            penggunaan
                                            barang/material luar
                                            negeri</label>
                                        <input type="text" name="persen_penggunaan_barang_material"
                                            id="persen_penggunaan_barang_material" class="form-control my-2 persen"
                                            value={{ $tPenyelenggaraan->persen_penggunaan_barang_material }}>

                                        <div class="form-group my-2">
                                            <label class="fw-bold" for="standar_mutu_peralatan">Terkait standar mutu
                                                peralatan, apakah
                                                ada
                                                uji kelayakan operasional peralatan</label>
                                            <div class="form-group my-2 radio">
                                                <input class="form-check-input " type="radio"
                                                    name="standar_mutu_peralatan" id="ada" value="Ada"
                                                    @php echo ($tPenyelenggaraan->standar_mutu_peralatan == 'Ada') ? 'checked' : '' @endphp>
                                                <label class="form-check-label" for="ada">
                                                    Ada
                                                </label>
                                                <br>
                                                <input class="form-check-input" type="radio"
                                                    name="standar_mutu_peralatan" id="tidak_ada" value="Tidak Ada"
                                                    @php echo ($tPenyelenggaraan->standar_mutu_peralatan == 'Tidak Ada') ? 'checked' : '' @endphp>
                                                <label class="form-check-label" for="tidak_ada">
                                                    Tidak Ada
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group my-2 standarOperasional">
                                            <label class="fw-bold" for="bukti_sertifikat_operasional">Bukti sertifikat
                                                operasional
                                                kelayakan alat</label>
                                            <div class="input-group my-2">
                                                <input type="file" class="form-control"
                                                    id="bukti_sertifikat_operasional" name="bukti_sertifikat_operasional">
                                                <input type="hidden" class="form-control"
                                                    id="bukti_sertifikat_operasional"
                                                    name="bukti_sertifikat_operasionalDefault"
                                                    value="{{ $tPenyelenggaraan->bukti_sertifikat_operasional }}">
                                                <label class="input-group-text"
                                                    for="bukti_sertifikat_operasional">Upload</label>
                                            </div>
                                            <a href="/../../storage/{{ $tPenyelenggaraan->bukti_sertifikat_operasional }}"
                                                class="text-decoration-none" target="blank">Dokumen</a>
                                        </div>

                                        <label class="fw-bold" for="jumlah_tenaga_kerja_yang_dipekerjakan">Jumlah tenaga
                                            kerja
                                            konstruksi
                                            yang dipekerjakan (Tukang)
                                        </label>
                                        <input type="text" name="jumlah_tenaga_kerja_yang_dipekerjakan"
                                            id="jumlah_tenaga_kerja_yang_dipekerjakan" class="form-control my-2"
                                            value="{{ $tPenyelenggaraan->jumlah_tenaga_kerja_yang_dipekerjakan }}">

                                        <label class="fw-bold" for="jumlah_tenaga_kerja_yang_memiliki_sertifikat">Jumlah
                                            tenaga kerja
                                            konstruksi ( tukang) yang memiliki sertifikat kompetensi
                                        </label>
                                        <input type="text" name="jumlah_tenaga_kerja_yang_memiliki_sertifikat"
                                            id="jumlah_tenaga_kerja_yang_memiliki_sertifikat" class="form-control my-2"
                                            value="{{ $tPenyelenggaraan->jumlah_tenaga_kerja_yang_memiliki_sertifikat }}">

                                    </div>

                                    <div class="col-lg-12 my-3 text-center">
                                        <button type="submit" class="btn btn-primary mt-2">
                                            Edit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
@endsection
