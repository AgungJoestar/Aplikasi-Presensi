<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStafTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staf', function (Blueprint $table) {
            $table->bigInteger('nip_staf', 20);
            $table->string('nama_staf',100);
            $table->string('email_staf',100)->nullable();
            $table->string('alamat_staf',200);
            $table->string('tempat_lahir_staf',100);
            $table->date('tgl_lahir_staf');
            $table->string('no_telp_staf',20)->nullable();
            $table->date('tgl_masuk_staf')->nullable();
            $table->string('pend_terakhir_staf',20)->nullable();
            $table->string('jabatan_staf',100)->nullable();
            $table->string('boarding_staf',100)->nullable();
            $table->string('status_nikah_staf',100)->nullable();
            $table->integer('jumlah_kel_staf', false, true)->length(20)->nullable();
            $table->text('image')->nullable();
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
        Schema::dropIfExists('staf');
    }
}
