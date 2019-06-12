<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tabelpasien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('pasien',function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('nama', 100);
            $table->string('jeniskelamin', 20);
            $table->string('tempatlahir', 255);
            $table->string('umur', 5);
            $table->string('pekerjaan', 255);
            $table->string('alamat', 255);
            $table->timestamps();
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pasien');
    }
    p
}
