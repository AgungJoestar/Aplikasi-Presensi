<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            // $table->bigIncrements('id_siswa');
            $table->bigInteger('nis',30);
            $table->bigInteger('nisn')->unsigned()->unique();
            $table->bigInteger('angkatan')->unsigned();
            $table->bigInteger('id_kelas')->unsigned()->nullable();
            $table->bigInteger('id_pramubaligh')->unsigned()->nullable();
            $table->bigInteger('id_pascamubaligh')->unsigned()->nullable();
            $table->bigInteger('id_bimbel')->unsigned()->nullable();
            $table->bigInteger('id_pesantren')->unsigned()->nullable();
            $table->string('nama_siswa',100);
            $table->string('email',50)->nullable();
            $table->date('tgl_lahir');
            $table->string('tmpt_lahir',20);
            $table->string('jk_siswa',20);
            $table->text('image')->nullable();
            $table->string('alamat_siswa',100);
            $table->string('no_telp',20)->nullable();
            // $table->string('ortu',100);
            // $table->string('emailortu',50);
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
        Schema::dropIfExists('siswa');
    }
}
