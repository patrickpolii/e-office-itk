<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSurat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat', 191)->unique();
            $table->bigInteger('id_jenis_surat')->unsigned();
            $table->foreign('id_jenis_surat')
                  ->references('id')
                  ->on('jenis_surat');
           
            $table->bigInteger('id_mahasiswa')->unsigned();
            $table->foreign('id_mahasiswa')
                  ->references('id')
                  ->on('mahasiswa');
            $table->string('keperluan', 191);
            $table->string('tujuan_surat', 191);
            $table->string('tahun_akademik')->nullable();
            $table->string('semester')->nullable();
            $table->string('organisasi')->nullable();
            $table->string('jabatan_organisasi')->nullable();
            $table->string('akreditasi_prodi')->nullable();
            $table->string('akreditasi_institut')->nullable();
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
        Schema::dropIfExists('surat');
    }
}
