<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gajis', function (Blueprint $table) {
            $table->id();
            $table->string('nip');
            $table->string('periode');
            $table->double('upah_pokok_bulan', 12, 2);
            $table->double('bpjs_kesehatan_perusahaan', 12, 2);
            $table->double('bpjs_ketenagakerjaan_jht', 12, 2);
            $table->double('bpjs_ketenagakerjaan_jkk', 12, 2);
            $table->double('bpjs_ketenagakerjaan_jkm', 12, 2);
            $table->double('bpjs_ketenagakerjaan_jp', 12, 2);
            $table->double('total_lembur', 12, 2);
            $table->double('tunjangan_HM', 12, 2);
            $table->double('tunjangan_kinerja', 12, 2);
            $table->double('uang_saku', 12, 2);
            $table->double('tunjangan_kehadiran', 12, 2);
            $table->double('tunjangan_makan', 12, 2);
            $table->double('tunjangan_field', 12, 2);
            $table->double('tunjangan_komunikasi', 12, 2);
            $table->double('tunjangan_unit', 12, 2);
            $table->double('kurang_bayar', 12, 2);
            $table->double('iuran_bpjs_kesehatan_karyawan', 12, 2);
            $table->double('iuran_bpjs_kesehatan_perusahaan', 12, 2);
            $table->double('iuran_bpjs_ketenagakerjaan_karyawan', 12, 2);
            $table->double('iuran_bpjs_ketenagakerjaan_perusahaan', 12, 2);
            $table->double('iuran_pph_21', 12, 2);
            $table->double('lebih_bayar', 12, 2);
            $table->double('unpaid', 12, 2);
            $table->double('potongan_koperasi', 12, 2);
            $table->double('potongan_lain_lain', 12, 2);
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
        Schema::dropIfExists('gajis');
    }
};
