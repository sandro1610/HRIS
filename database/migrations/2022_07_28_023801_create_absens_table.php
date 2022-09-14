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
        Schema::create('absens', function (Blueprint $table) {
            $table->id();
            $table->string('nip');
            $table->string('periode');
            $table->integer('shift1');
            $table->integer('shift2');
            $table->integer('telat');
            $table->integer('stb');
            $table->integer('tr');
            $table->integer('jumlah_hari_kerja');
            $table->double('jumlah_lembur');
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
        Schema::dropIfExists('absens');
    }
};
