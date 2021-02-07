<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman_tables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->char('status_pinjam', 2)->nullable();
            $table->text('keterangan')->nullable();
            $table->bigInteger('users_id')->unsigned();
            $table->bigInteger('bukus_id')->unsigned();
            $table->foreign('users_id')
            ->references('id')
            ->on('users');
            $table->foreign('bukus_id')
            ->references('id')
            ->on('bukus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman_tables');
    }
}