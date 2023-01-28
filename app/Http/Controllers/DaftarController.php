<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\PaketPekerjaan;
use App\Models\TertibUsaha;
use App\Models\TertibPenyelenggaraan;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class DaftarController extends Controller
{



    //
    public function index()
    {
        $paket = PaketPekerjaan::where('id_user', Auth::user()->id)->first();

        if (isset($paket)) {
            return redirect('/tertib');
        }

        return view('daftar/index', [
            'title' => 'Daftar'
        ]);
    }

    public function storePaket(Request $request)
    {
        // ddd($request);

        $validated = $request->validate([
            // 'id_user' => 'required|unique:posts|max:255',
            // 'id_user' => 'required',
            'dinas' => 'required',
            'ppk' => 'required',
            'namaPaket' => 'required',
            'lokasi' => 'required',
            'kompleksPekerjaan' => 'required',
            'namaPerusahaan' => 'required',
            'alamatPerusahaan' => 'required',
            'prosesPilihPenyedia' => 'required',
            'metodePembayaran' => 'required',
            'noKontrak' => 'required',
            'tglKontrak' => 'required',
            'nilaiKontrak' => 'required',
            'jenisKontrak' => 'required',
            'konsultanPengawas' => 'required',
            'konsultanPerencana' => 'required',
            'waktuPelaksanaanKerja' => 'required',
            'sumberDana' => 'required'
        ]);

        // dd($validated);

        $dokumenKontrak = $request->file('dokumenKontrak')->store('dokumenKontrak');
        $jadwalPelaksanaanPekerjaan = $request->file('jadwalPelaksanaanPekerjaan')->store('jadwalPelaksanaanPekerjaan');

        PaketPekerjaan::create([
            'id_user' => Auth::user()->id,
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

        // Next ke Daftar 2

        return redirect('/tertib');
    }

    public function tertib()
    {
        // Cek
        $paket = PaketPekerjaan::where('id_user', Auth::user()->id)->first();
        $TUsaha = TertibUsaha::where('id_user', Auth::user()->id)->first();


        if (!isset($paket)) {
            return redirect('/daftar');
        }

        if (isset($TUsaha)) {
            return redirect('/penyelenggaraan');
        }

        return view('daftar/tertib', [
            'title' => 'Tertib Usaha Jasa Konstruksi'
        ]);
    }

    public function storeTertib(Request $request)
    {
        // dd($request);


        $nib = $request->file('nib')->store('nib');
        $npwp_perusahaan = $request->file('npwp_perusahaan')->store('npwp_perusahaan');
        $sertifikat_badan_usaha = $request->file('sertifikat_badan_usaha')->store('sertifikat_badan_usaha');
        if ($request->file('riwayat_pengalaman_badan_usaha') !== NULL) {

            $riwayat = $request->file('riwayat_pengalaman_badan_usaha')->store('riwayat');
            $dokumen_berita = $request->file('dokumen_berita_acara_serah_terima')->store('dokumen_berita');
        } else {
            $riwayat = NULL;
            $dokumen_berita = NULL;
        }


        $dokumen_kontrak_k3 = $request->file('dokumen_kontrak_k3')->store('dokumen_kontrak_k3');

        TertibUsaha::create([
            'id_user' => Auth::user()->id,
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
        return redirect('/penyelenggaraan');
    }

    public function penyelenggaraan()
    {
        $paket = PaketPekerjaan::where('id_user', Auth::user()->id)->first();
        $TUsaha = TertibUsaha::where('id_user', Auth::user()->id)->first();
        $TPenyelenggaraan = TertibPenyelenggaraan::where('id_user', Auth::user()->id)->first();

        if (!isset($TUsaha)) {
            return redirect('/tertib');
        }
        if (isset($TPenyelenggaraan)) {
            return redirect('/profil');
        }

        return view('daftar/penyelenggaraan', [
            'title' => 'Tertib Penyelenggaraan Jasa Konstruksi'
        ]);
    }

    public function storePenyelenggaraan(Request $request)
    {
        $dokumen_jaminan_pelaksanaan = $request->file('dokumen_jaminan_pelaksanaan')->store('dokumen_jaminan_pelaksanaan');
        $dokumen_jaminan_uang_muka = $request->file('dokumen_jaminan_uang_muka')->store('dokumen_jaminan_uang_muka');
        $bukti_pembayaran_asuransi_tenaga_kerja = $request->file('bukti_pembayaran_asuransi_tenaga_kerja')->store('bukti_pembayaran_asuransi_tenaga_kerja');
        $bukti_sertifikat_operasional = $request->file('bukti_sertifikat_operasional')->store('bukti_sertifikat_operasional');


        TertibPenyelenggaraan::create([
            'id_user' => Auth::user()->id,
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

        return redirect('/profil');
    }

}