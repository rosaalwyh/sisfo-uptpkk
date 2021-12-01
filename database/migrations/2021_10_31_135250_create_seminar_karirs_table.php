<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeminarKarirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seminar_karirs', function (Blueprint $table) {
            $table->id();
            $table->string('seminar_judul', 100);
            $table->string('seminar_penulis', 50);
            $table->string('seminar_konten', 5000);
            $table->date('seminar_tanggal', 5000);
            $table->string('seminar_foto', 5000)->nullable();
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
        Schema::dropIfExists('seminar_karirs');
    }
}
