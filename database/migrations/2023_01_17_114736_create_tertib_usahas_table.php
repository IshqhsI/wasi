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
        Schema::create('tertib_usahas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('klasifikasi_usaha');
            $table->string('bentuk_usaha');
            $table->string('kualifikasi_usaha');
            $table->string('perizinan_berusaha');
            $table->string('nib');
            $table->string('npwp_perusahaan');
            $table->string('sertifikat_badan_usaha');
            $table->string('no_tglAkta_namaNotaris');
            $table->string('lama_pendirian_badan_usaha');
            $table->string('riwayat_pengalaman_badan_usaha')->nullable();
            $table->string('dokumen_berita_acara_serah_terima')->nullable();
            $table->string('dokumen_kontrak_k3');
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
        Schema::dropIfExists('tertib_usahas');
    }
};