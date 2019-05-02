<?php

use Illuminate\Support\Facades\Schema; // kie dicopyy men gampang
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id'); // nek kaya kie brarti gawe colom jenenge id
            $table->String('nama_buku'); // nek kie brarti gawe colom nama_buku tipe datane String
            $table->integer('harga'); //colom harga tipe data integer, mudeng mbok mudengg good
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
        Schema::dropIfExists('books');
    }
}
