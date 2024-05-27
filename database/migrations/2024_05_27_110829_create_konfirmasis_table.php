<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('konfirmasis', function (Blueprint $table) {
            $table->bigIncrements('id_konfirmasi');
            $table->unsignedBigInteger('id_pinjam')->nullable();
            $table->unsignedBigInteger('id_admin')->nullable();
            $table->date('tanggal_pinjam')->nullable();
            $table->date('tanggal_pengembalian')->nullable();
            $table->enum('status', ['pending', 'rejected', 'approve'])->default('pending');
            $table->timestamps();

            $table->foreign('id_pinjam')->references('id_pinjam')->on('pinjams')->onDelete('cascade');
            $table->foreign('id_admin')->references('id_admin')->on('admins')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('konfirmasis');
    }
};
