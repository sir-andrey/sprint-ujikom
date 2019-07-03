<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAndreRuangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('andre_ruangs', function (Blueprint $table) {
            $table->increments('andre_id_ruang');
            $table->string('andre_nama_ruang', 50);
            $table->string('andre_kode_ruang', 15);
            $table->text('andre_keterangan')->nullable();;
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
        Schema::dropIfExists('andre_ruangs');
    }
}
