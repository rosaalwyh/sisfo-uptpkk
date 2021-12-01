<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonselingKarirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konseling_karirs', function (Blueprint $table) {
            $table->id();
            $table->string('konseling_judul', 100);
            $table->string('konseling_penulis', 50);
            $table->string('konseling_konten', 5000);
            $table->date('konseling_tanggal', 5000);
            $table->string('konseling_foto', 5000)->nullable();
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
        Schema::dropIfExists('konseling_karirs');
    }
}
