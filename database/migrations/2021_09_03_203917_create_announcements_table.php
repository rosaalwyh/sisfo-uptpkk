<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnouncementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announcements', function (Blueprint $table) {
            $table->bigIncrements('pengumuman_id');
            $table->string('pengumuman_judul');
            $table->string('pengumuman_slug');
            $table->text('pengumuman_konten');
            $table->string('pengumuman_sampul')->nullable();
            $table->unsignedBigInteger('pengumuman_author');
            $table->unsignedBigInteger('pengumuman_kategori');
            $table->boolean('pengumuman_status');
            $table->timestamps();

            $table->foreign('pengumuman_author')->references('user_id')->on('users');
            $table->foreign('pengumuman_kategori')->references('kategori_id')->on('announcement_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('announcements');
    }
}
