<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAndreInventarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('andre_inventaris', function (Blueprint $table) {
            $table->increments('andre_id_inventaris');
            $table->string('andre_nama', 50);
            $table->string('andre_kondisi', 10);
            $table->text('andre_keterangan')->nullable();
            $table->integer('andre_jumlah');

            $table->integer('andre_id_jenis')->unsigned();
            $table->foreign('andre_id_jenis')->references('andre_id_jenis')->on('andre_jenis')->onDelete('cascade')->onUpdate('cascade');
            
            $table->date('andre_tanggal_register');

            $table->integer('andre_id_ruang')->unsigned();
            $table->foreign('andre_id_ruang')->references('andre_id_ruang')->on('andre_ruangs')->onDelete('cascade')->onUpdate('cascade');

            $table->string('andre_kode_inventaris');

            $table->integer('andre_id_petugas')->unsigned();
            $table->foreign('andre_id_petugas')->references('andre_id_petugas')->on('andre_petugas')->onDelete('cascade')->onUpdate('cascade');
            
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
        Schema::dropIfExists('andre_inventaris');
    }
}
