<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAndrePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('andre_pegawais', function (Blueprint $table) {
            $table->integer('andre_id_pegawai')->unsigned()->index();
            $table->foreign('andre_id_pegawai')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('andre_username', 191)->unique();
            $table->string('andre_password');
            $table->string('andre_email', 191)->unique();
            $table->string('andre_nama_pegawai', 50);
            $table->string('andre_nip', 16);
            $table->text('andre_alamat');
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
        Schema::dropIfExists('andre_pegawais');
    }
}
