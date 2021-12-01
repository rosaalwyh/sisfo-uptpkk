<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformasiKewirausahaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasi_kewirausahaans', function (Blueprint $table) {
            $table->id();
            $table->string('informasi_judul', 100);
            $table->string('informasi_penulis', 50);
            $table->string('informasi_konten', 5000);
            $table->date('informasi_tanggal', 5000);
            $table->string('informasi_foto', 5000)->nullable();
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
        Schema::dropIfExists('informasi_kewirausahaans');
    }
}
