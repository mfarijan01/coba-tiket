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
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();
            $table->string('Pesawat');
            $table->string('Penerbangan');
            $table->string('Keberangkatan');
            $table->string('Dari');
            $table->string('Kota');
            $table->date('tanggal')->nullable();
            $table->string('Class');
            $table->string('phone', 15)->nullable();
            $table->string('gambar', 200)->default('default.png');
            $table->INTEGER('Harga');
            $table->INTEGER('Jumlah');
            $table->bigInteger('users_id')->unsigned()->nullable();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('pemesanan');
    }
};
