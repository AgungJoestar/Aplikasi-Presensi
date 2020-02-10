<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensiPesantren extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi_pesantren', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('nis');
            $table->bigInteger('id_kelas')->unsigned();
            $table->string('pertemuan');
            $table->char('absen',100);
            $table->date('tgl_absen');
            $table->string('keterangan',100)->nullable();
            // $table->string('id_kegiatan',20);
            // $table->string('keterangan',50);
            $table->timestamps();

            $table->foreign('nis')->references('nis')->on('siswa')->onDelete('cascade');
            $table->foreign('id_kelas')->references('id')->on('kelas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absensi_pesantren');
    }
}
