<?php

namespace App\Http\Controllers;

use App\Models\PaketPekerjaan;
use App\Models\TertibPenyelenggaraan;
use App\Models\TertibUsaha;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = PaketPekerjaan::all();
        $sumData = Count($data);

        $user = User::where('isAdmin', 0)->get();
        $sumUser = Count($user);

        return view('admin.index', [
            'title' => 'Dashboard Admin',
            'row' => $data,
            'jumlahUser' => $sumUser,
            'jumlahDaftar' => $sumData
        ]);
    }

    public function detail($id)
    {

        $data = PaketPekerjaan::where('id', $id)->first();
        $email = User::where('id', $data->id_user)->first();
        return view('admin.detail', [
            'title' => 'Detail',
            'row' => $data,
            'id' => $id,
            'email' => $email
        ]);

    }

    public function detail2($id)
    {
        $data = TertibUsaha::where('id', $id)->first();
        $email = User::where('id', );
        return view('admin.detail2', [
            'title' => 'Detail',
            'row' => $data,
            'id' => $id
        ]);
    }

    public function detail3($id)
    {
        $data = TertibPenyelenggaraan::where('id', $id)->first();
        return view('admin.detail3', [
            'title' => 'Detail',
            'row' => $data,
            'id' => $id
        ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $paket = PaketPekerjaan::where('id', $id)->first();
        $tUsaha = TertibUsaha::where('id', $id)->first();
        $tPenyelenggaraan = TertibPenyelenggaraan::where('id', $id)->first();

        return view('admin.edit', [
            'title' => 'Edit',
            'paket' => $paket,
            'tUsaha' => $tUsaha,
            'tPenyelenggaraan' => $tPenyelenggaraan,
            'id' => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dokumenKontrak = $request->file('dokumenKontrak');

        if (isset($dokumenKontrak)) {
            $dokumenKontrak = $request->file('dokumenKontrak')->store('dokumenKontrak');
        } else {
            $dokumenKontrak = $request->dokumenKontrakDefault;
        }

        $jadwalPelaksanaanPekerjaan = $request->file('jadwalPelaksanaanPekerjaan');
        if (isset($jadwalPelaksanaanPekerjaan)) {
            $jadwalPelaksanaanPekerjaan = $request->file('jadwalPelaksanaanPekerjaan')->store('jadwalPelaksanaanPekerjaan');

        } else {
            $jadwalPelaksanaanPekerjaan = $request->jadwalPelaksanaanPekerjaanDefault;

        }

        PaketPekerjaan::where('id', $id)
            ->update([
                'dinas' => $request->dinas,
                'pejabat_pembuat_komitmen' => $request->ppk,
                'nama_paket_pekerjaan' => $request->namaPaket,
                'lokasi_pekerjaan' => $request->lokasi,
                'kompleksitas_pekerjaan' => $request->kompleksPekerjaan,
                'nama_perusahaan' => $request->namaPerusahaan,
                'alamat_perusahaan' => $request->alamatPerusahaan,
                'proses_pemilihan_penyedia' => $request->prosesPilihPenyedia,
                'metode_pembayaran_pekerjaan' => $request->metodePembayaran,
                'nomor_kontrak' => $request->noKontrak,
                'tanggal_kontrak' => $request->tglKontrak,
                'nilai_kontrak' => $request->nilaiKontrak,
                'jenis_kontrak' => $request->jenisKontrak,
                'dokumen_kontrak' => $dokumenKontrak,
                'konsultan_pengawas' => $request->konsultanPengawas,
                'konsultan_perencana' => $request->konsultanPerencana,
                'waktu_pelaksanaan_kerja' => $request->waktuPelaksanaanKerja,
                'jadwal_pelaksanaan_pekerjaan' => $jadwalPelaksanaanPekerjaan,
                'sumber_dana' => $request->sumberDana
            ]);
        return redirect('/admin');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateTertib(Request $request, $id)
    {
        $nib = $request->file('nib');

        if (isset($nib)) {
            $nib = $request->file('nib')->store('nib');
        } else {
            $nib = $request->nibDefault;
        }


        $npwp_perusahaan = $request->file('npwp_perusahaan');
        if (isset($npwp_perusahaan)) {
            $npwp_perusahaan = $request->file('npwp_perusahaan')->store('npwp_perusahaan');
        } else {
            $npwp_perusahaan = $request->npwp_perusahaanDefault;
        }

        $sertifikat_badan_usaha = $request->file('sertifikat_badan_usaha');
        if (isset($sertifikat_badan_usaha)) {
            $sertifikat_badan_usaha = $request->file('sertifikat_badan_usaha')->store('sertifikat_badan_usaha');

        } else {
            $sertifikat_badan_usaha = $request->sertifikat_badan_usahaDefault;
        }

        if ($request->file('riwayat_pengalaman_badan_usaha') !== NULL) {
            $riwayat = $request->file('riwayat_pengalaman_badan_usaha')->store('riwayat');
            $dokumen_berita = $request->file('dokumen_berita_acara_serah_terima')->store('dokumen_berita');
        } else {
            $riwayat = NULL;
            $dokumen_berita = NULL;
        }

        if ($request->file('dokumen_kontrak_k3') !== NULL) {
            $dokumen_kontrak_k3 = $request->file('dokumen_kontrak_k3')->store('dokumen_kontrak_k3');
        } else {
            $dokumen_kontrak_k3 = $request->dokumen_kontrak_k3Default;
        }

        TertibUsaha::where('id', $id)
            ->update([
                'klasifikasi_usaha' => $request->klasifikasi_usaha,
                'bentuk_usaha' => $request->bentuk_usaha,
                'kualifikasi_usaha' => $request->kualifikasi_usaha,
                'perizinan_berusaha' => $request->perizinan_berusaha,
                'nib' => $nib,
                'npwp_perusahaan' => $npwp_perusahaan,
                'sertifikat_badan_usaha' => $sertifikat_badan_usaha,
                'no_tglAkta_namaNotaris' => $request->no_tglAkta_namaNotaris,
                'lama_pendirian_badan_usaha' => $request->lama_pendirian_badan_usaha,
                'riwayat_pengalaman_badan_usaha' => $riwayat,
                'dokumen_berita_acara_serah_terima' => $dokumen_berita,
                'dokumen_kontrak_k3' => $dokumen_kontrak_k3
            ]);

        return redirect('/admin');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePenyelenggaraan(Request $request, $id)
    {
        $dokumen_jaminan_pelaksanaan = $request->file('dokumen_jaminan_pelaksanaan');

        if (isset($dokumen_jaminan_pelaksanaan)) {
            $dokumen_jaminan_pelaksanaan = $request->file('dokumen_jaminan_pelaksanaan')->store('dokumen_jaminan_pelaksanaan');
        } else {
            $dokumen_jaminan_pelaksanaan = $request->dokumen_jaminan_pelaksanaanDefault;
        }

        $dokumen_jaminan_uang_muka = $request->file('dokumen_jaminan_uang_muka');
        if (isset($dokumen_jaminan_uang_muka)) {
            $dokumen_jaminan_uang_muka = $request->file('dokumen_jaminan_uang_muka')->store('dokumen_jaminan_uang_muka');
        } else {
            $dokumen_jaminan_uang_muka = $request->dokumen_jaminan_uang_mukaDefault;
        }

        $bukti_pembayaran_asuransi_tenaga_kerja = $request->file('bukti_pembayaran_asuransi_tenaga_kerja');
        if (isset($bukti_pembayaran_asuransi_tenaga_kerja)) {
            $bukti_pembayaran_asuransi_tenaga_kerja = $request->file('bukti_pembayaran_asuransi_tenaga_kerja')->store('bukti_pembayaran_asuransi_tenaga_kerja');
        } else {
            $bukti_pembayaran_asuransi_tenaga_kerja = $request->bukti_pembayaran_asuransi_tenaga_kerjaDefault;
        }

        if ($request->file('bukti_sertifikat_operasional') !== NULL) {
            $bukti_sertifikat_operasional = $request->file('bukti_sertifikat_operasional')->store('bukti_sertifikat_operasional');
        } else {
            $bukti_sertifikat_operasional = $request->bukti_sertifikat_operasionaDefault;
        }

        if ($request->penggunaan_barang_material == 'Dalam Negeri 100%') {
            $request->persen_penggunaan_barang_material = 0;
        }

        if ($request->standar_mutu_peralatan == 'Tidak Ada') {
            $bukti_sertifikat_operasional = '-';
        }


        TertibPenyelenggaraan::where('id', $id)
            ->update([
                'jaminan_pelaksanaan' => $request->jaminan_pelaksanaan,
                'dokumen_jaminan_pelaksanaan' => $dokumen_jaminan_pelaksanaan,
                'jaminan_uang_muka' => $request->jaminan_uang_muka,
                'dokumen_jaminan_uang_muka' => $dokumen_jaminan_uang_muka,
                'biaya_penyelenggaraan_smkk' => $request->biaya_penyelenggaraan_smkk,
                'biaya_penyelenggaran_sesuai_permen' => $request->biaya_penyelenggaran_sesuai_permen,
                'bukti_pembayaran_asuransi_tenaga_kerja' => $bukti_pembayaran_asuransi_tenaga_kerja,
                'bahan_atau_material' => $request->bahan_atau_material,
                'penggunaan_barang_material' => $request->penggunaan_barang_material,
                'persen_penggunaan_barang_material' => $request->persen_penggunaan_barang_material,
                'standar_mutu_peralatan' => $request->standar_mutu_peralatan,
                'bukti_sertifikat_operasional' => $bukti_sertifikat_operasional,
                'jumlah_tenaga_kerja_yang_dipekerjakan' => $request->jumlah_tenaga_kerja_yang_dipekerjakan,
                'jumlah_tenaga_kerja_yang_memiliki_sertifikat' => $request->jumlah_tenaga_kerja_yang_memiliki_sertifikat
            ]);
        return redirect('/admin');
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        PaketPekerjaan::destroy($id);
        TertibUsaha::destroy($id);
        TertibPenyelenggaraan::destroy($id);

        return redirect('/admin')->with('status', 'Data Berhasil Dihapus');
    }
}