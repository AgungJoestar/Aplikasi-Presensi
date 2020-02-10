<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensiguru extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensiguru', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('nip');
            $table->char('absen',100)->nullable();
            $table->date('tgl_absen');
            $table->string('keterangan',100)->nullable();
            // $table->string('id_kegiatan',20);
            // $table->string('keterangan',50);
            $table->timestamps();

            $table->foreign('nip')->references('nip')->on('guru')->onDelete('cascade')->onUpdate('cascade');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absensiguru');
    }
}
