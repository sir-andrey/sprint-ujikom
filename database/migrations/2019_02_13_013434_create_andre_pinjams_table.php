<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAndrePinjamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('andre_pinjams', function (Blueprint $table) {
            $table->increments('andre_id_pinjam');
            $table->string('andre_kode_pinjam', 15);
            $table->date('andre_tanggal_pinjam');
            $table->date('andre_tanggal_kembali')->nullable();
            $table->string('andre_status_peminjaman', 10);
            $table->string('andre_status_persetujuan', 10);
            $table->integer('andre_id_petugas')->unsigned()->nullable();
            $table->foreign('andre_id_petugas')->references('andre_id_petugas')->on('andre_petugas');

            $table->integer('andre_id_pegawai')->unsigned();
            $table->foreign('andre_id_pegawai')->references('andre_id_pegawai')->on('andre_pegawais');

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
        Schema::dropIfExists('andre_pinjams');
    }
}
