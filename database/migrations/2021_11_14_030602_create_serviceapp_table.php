<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceappTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serviceapp', function (Blueprint $table) {
            $table->bigIncrements('id_serviceapp');
            $table->string('judul',255);
            $table->text('isi')->nullable();
            $table->unsignedBigInteger('id_service');
            $table->date('tanggal');
            $table->foreign('id_service')->references('id_service')->on('id_service')
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
        Schema::dropIfExists('serviceapp');
    }
}
