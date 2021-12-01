<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('berita_id');
            $table->string('berita_judul');
            $table->string('berita_slug');
            $table->text('berita_konten');
            $table->string('berita_sampul')->nullable();
            $table->unsignedBigInteger('berita_author');
            $table->unsignedBigInteger('berita_kategori');
            $table->boolean('berita_status');
            $table->timestamps();

            $table->foreign('berita_author')->references('user_id')->on('users');
            $table->foreign('berita_kategori')->references('kategori_id')->on('news_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
