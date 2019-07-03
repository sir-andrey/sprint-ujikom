<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAndrePetugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('andre_petugas', function (Blueprint $table) {
            $table->integer('andre_id_petugas')->unsigned()->index();
            $table->foreign('andre_id_petugas')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('andre_username', 191)->unique();
            $table->string('andre_password');
            $table->string('andre_email', 191)->unique();
            $table->string('andre_nama_petugas', 50);
            $table->string('andre_nip', 16);
            $table->text('andre_alamat');
            $table->integer('andre_id_level')->unsigned();
            $table->foreign('andre_id_level')->references('andre_id_level')->on('andre_levels');
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
        Schema::dropIfExists('andre_petugas');
    }
}
