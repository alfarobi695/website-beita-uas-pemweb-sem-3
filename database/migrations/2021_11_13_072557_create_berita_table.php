<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->bigIncrements('id_berita');
            $table->String('judul',255);  
            $table->String('publisher',255);  
            $table->integer('tanggal_publish'); 
            $table->text('keterangan_berita')->nullable();
            $table->String('gambar_berita',255);
            //membuat FK dari id_kategori_berita       
            $table->unsignedBigInteger('id_kategori_berita');
            $table->unsignedBigInteger('id_penulis');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');
            $table->timestamps();
            //foreign artinya kolom tersebut adalah FK
            //referensi artinya kita merefensi PK 
            //pada tabel kategori_berita melalui fungsi on
            $table->foreign('id_kategori_berita')
            ->references('id_kategori_berita')
            ->on('kategori_berita')
            ->onDelete('cascade')->onUpdate('cascade'); 

            $table->foreign('id_penulis')->references('id_penulis')
            ->on('penulis')
            ->onDelete('cascade')->onUpdate('cascade'); 

            $table->foreign('created_by')->references('id')
            ->on('users')->onDelete('cascade')->onUpdate('cascade'); 

            $table->foreign('updated_by')->references('id')
            ->on('users')->onDelete('cascade')->onUpdate('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berita');
    }
}
