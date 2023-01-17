<?php

namespace App\Http\Controllers;

use App\Models\PaketPekerjaan;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    //
    public function index()
    {
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
            'id_user' => 1,
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

        return redirect('/');
    }
}