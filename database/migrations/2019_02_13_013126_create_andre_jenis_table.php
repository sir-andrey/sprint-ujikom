<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAndreJenisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('andre_jenis', function (Blueprint $table) {
            $table->increments('andre_id_jenis');
            $table->string('andre_nama_jenis', 50);
            $table->string('andre_kode_jenis', 15);
            $table->text('andre_keterangan')->nullable();
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
        Schema::dropIfExists('andre_jenis');
    }
}
