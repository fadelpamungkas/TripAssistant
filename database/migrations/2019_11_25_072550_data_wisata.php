<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataWisata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_wisata', function (Blueprint $table) {
            $table->increments('id_wisata');
            $table->string('nama_wisata');
            $table->integer('harga_wisata');
            $table->string('jadwal_wisata');
            $table->double('rating_wisata');
            $table->integer('review_wisata');
            $table->text('informasi_wisata');
            $table->string('gambar_wisata');
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
        //
    }
}
