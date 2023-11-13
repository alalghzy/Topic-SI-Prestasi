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
        Schema::create('prestasis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('npm');
            $table->string('jurusan');
            $table->string('juara');
            $table->string('lomba');
            $table->string('penyelenggara');
            $table->string('tingkat');
            $table->date('tanggal');
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
        Schema::dropIfExists('prestasis');
    }
};
