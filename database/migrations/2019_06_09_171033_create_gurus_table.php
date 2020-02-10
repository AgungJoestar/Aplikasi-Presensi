<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->bigInteger('nip', 20);
            $table->string('id_kelas',100)->nullable();
            $table->string('nama',100);
            $table->string('email',100)->nullable();
            $table->string('alamat',200);
            $table->string('tempat_lahir',100);
            $table->date('tgl_lahir');
            $table->string('no_telp',20)->nullable();
            $table->date('tgl_masuk')->nullable();
            $table->string('pend_terakhir',20)->nullable();
            $table->string('jabatan',100)->nullable();
            $table->string('boarding',100)->nullable();
            $table->string('status_nikah',100)->nullable();
            $table->integer('jumlah_kel', false, true)->length(20)->nullable();
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
        Schema::dropIfExists('guru');
    }
}
