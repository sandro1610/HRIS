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
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->string('nip');
            $table->string('nama');
            $table->string('status');
            $table->string('posisi');
            $table->string('departemen');
            $table->string('agama');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->string('gol_darah');
            $table->string('no_hp');
            $table->string('no_rek');
            $table->string('pendidikan');
            $table->date('tgl_masuk');
            $table->string('ktp');
            $table->string('bpjs_ketenagakerjaan');
            $table->string('bpjs_kesehatan');
            $table->string('npwp');
            $table->double('upah_pokok', 12, 2);
            $table->double('lembur');
            $table->double('pph_21');
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
        Schema::dropIfExists('karyawans');
    }
};
