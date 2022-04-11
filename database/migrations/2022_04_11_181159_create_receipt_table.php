<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipt', function (Blueprint $table) {
            $table->booking_id();
            $table->bigInteger('restoran_id');
            $table->user_id();
            $table->reservasi_id();
            $table->date('hari_reservasi');
            $table->time('jam_reservasi');
            $table->jumlah();
            $table->admin_id();
            $table->string('nama_admin', 50);
            $table->string('nama_restoran', 50);
            $table->string('nama_user', 50);
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
        Schema::dropIfExists('receipt');
    }
}
