<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagBeritaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_berita', function (Blueprint $table) {
            $table->bigIncrements('id_tag_berita');
            $table->unsignedBigInteger('id_berita');
            $table->unsignedBigInteger('id_tag');
            
            $table->foreign('id_berita')->references('id_berita')
            ->on('berita')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_tag')->references('id_tag')
            ->on('tag')
            ->onDelete('cascade')->onUpdate('cascade'); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tag_berita');
    }
}
