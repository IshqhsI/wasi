<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_pekerjaans', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('dinas');
            $table->string('pejabat_pembuat_komitmen');
            $table->string('nama_paket_pekerjaan');
            $table->string('lokasi_pekerjaan');
            $table->string('kompleksitas_pekerjaan');
            $table->string('nama_perusahaan');
            $table->string('alamat_perusahaan');
            $table->string('proses_pemilihan_penyedia');
            $table->string('metode_pembayaran_pekerjaan');
            $table->string('nomor_kontrak');
            $table->date('tanggal_kontrak');
            $table->string('nilai_kontrak');
            $table->string('jenis_kontrak');
            $table->string('dokumen_kontrak');
            $table->string('konsultan_pengawas');
            $table->string('konsultan_perencana');
            $table->string('waktu_pelaksanaan_kerja');
            $table->string('jadwal_pelaksanaan_pekerjaan');
            $table->string('sumber_dana');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paket_pekerjaans');
    }
};