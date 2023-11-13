<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lombas', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('name');
            $table->string('npm');
            $table->string('jurusan');
            $table->string('lomba');
            $table->string('penyelenggara');
            $table->string('tingkat');
            $table->date('tanggal');
            $table->enum('status', ['Tidak Disetujui','Disetujui'])->default('Tidak Disetujui');
            $table->string('sertifikat')->nullable();

            $table->foreign('user_id')->references('username')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lombas');
    }
};
