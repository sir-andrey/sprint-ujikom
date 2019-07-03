<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAndreDetilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('andre_detils', function (Blueprint $table) {
            $table->increments('andre_id_detil');

            $table->integer('andre_id_inventaris')->unsigned();
            $table->foreign('andre_id_inventaris')->references('andre_id_inventaris')->on('andre_inventaris');

            $table->integer('andre_id_pinjam')->unsigned();
            $table->foreign('andre_id_pinjam')->references('andre_id_pinjam')->on('andre_pinjams')->onDelete('cascade')->onUpdate('cascade');

            $table->date('andre_tanggal_kembali')->nullable();

            $table->integer('andre_jumlah');
            $table->string('andre_status');
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
        Schema::dropIfExists('andre_detils');
    }
}
