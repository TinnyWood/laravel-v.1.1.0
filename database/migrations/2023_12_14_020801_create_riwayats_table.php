<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('riwayat', function (Blueprint $table) {
            $table->id();
            $table->string('nama_proses');
            $table->enum('klasifikasi_perubahan', ['design', 'proses']);
            $table->enum('pelaksanaan2ndQA', ['ada', 'tidak']);
            $table->string('item_perubahan');
            $table->string('no_lembar_instruksi')->nullable();
            $table->date('tanggal_produksi_saat_perubahan');
            $table->enum('shift', ['sift1', 'sift2']);
            $table->string('part_number_finish_good');
            $table->enum('kualitas', ['ok', 'ng']);
            $table->string('fakta_ng')->nullable();
            $table->enum('pcdt', ['resived', 'not resived']);
            $table->date('tanggal_perubahan_pcdt')->nullable();
            $table->enum('instruksi_kerja', ['resived', 'not resived']);
            $table->date('tanggal_perubahan_instruksi_kerja')->nullable();
            $table->enum('isir', ['resived', 'not resived']);
            $table->date('tanggal_perubahan_isir')->nullable();
            $table->enum('pemahaman', ['paham', 'kurang paham', 'tidak paham sama sekali']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('riwayat');
    }
};
