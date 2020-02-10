<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensiStafTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absenstaf', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('nip_staf');
            $table->char('absen_staf',100)->nullable();
            $table->date('tgl_absen_staf');
            $table->string('keterangan_staf',100)->nullable();
            // $table->string('id_kegiatan',20);
            // $table->string('keterangan',50);
            $table->timestamps();

            $table->foreign('nip_staf')->references('nip_staf')->on('staf')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absensi_staf');
    }
}
