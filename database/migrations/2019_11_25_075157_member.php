<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Member extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('member', function (Blueprint $table) {
        //     $table->increments('id_member');
        //     $table->string('nama_depan');
        //     $table->string('nama_belakang');
        //     $table->string('email');
        //     $table->string('password');
        //     $table->enum('jenis_kelamin', ['Pria','Wanita']);
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member');
    }
}
