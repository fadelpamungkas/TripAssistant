<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Comment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->increments('id_comment');
            $table->integer('rating_comment');
            $table->string('nama_comment');
            $table->string('gambar_comment');
            $table->string('nama_user');
            $table->unsignedInteger('id_wisata');
            $table->timestamps();
        });
        Schema::table('comment', function (Blueprint $table) {
            $table->foreign('id_wisata')->references('id_wisata')->on('data_wisata');
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
