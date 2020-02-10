<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SiswaConstraint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('siswa', function (Blueprint $table) {
            $table->foreign('id_kelas')->references('id')->on('kelas')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('id_bimbel')->references('id')->on('kelas')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('id_pramubaligh')->references('id')->on('kelas')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('id_pascamubaligh')->references('id')->on('kelas')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('id_pesantren')->references('id')->on('kelas')->onDelete('set null')->onUpdate('cascade'); 
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
