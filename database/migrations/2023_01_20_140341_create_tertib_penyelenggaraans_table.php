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
        Schema::create('tertib_penyelenggaraans', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('jaminan_pelaksanaan');
            $table->string('dokumen_jaminan_pelaksanaan');
            $table->string('jaminan_uang_muka');
            $table->string('dokumen_jaminan_uang_muka');
            $table->string('biaya_penyelenggaraan_smkk');
            $table->string('biaya_penyelenggaran_sesuai_permen');
            $table->string('bukti_pembayaran_asuransi_tenaga_kerja');
            $table->string('bahan_atau_material');
            $table->string('penggunaan_barang_material');
            $table->string('persen_penggunaan_barang_material')->nullable();
            $table->string('standar_mutu_peralatan');
            $table->string('bukti_sertifikat_operasional')->nullable();
            $table->string('jumlah_tenaga_kerja_yang_dipekerjakan');
            $table->string('jumlah_tenaga_kerja_yang_memiliki_sertifikat');
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
        Schema::dropIfExists('tertib_penyelenggaraans');
    }
};