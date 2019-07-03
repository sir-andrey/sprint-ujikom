<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       DB::unprepared('
        CREATE TRIGGER tambah_stok AFTER INSERT ON andre_detils FOR EACH ROW
            BEGIN
                UPDATE andre_inventaris SET andre_jumlah=andre_jumlah - NEW.andre_jumlah
                WHERE andre_id_inventaris = NEW.andre_id_inventaris;
            END
        '); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trigger');
    }
}
