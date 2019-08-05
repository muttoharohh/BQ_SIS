<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmpduasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smpduas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mapel', 255)->nullable();
            $table->string('judul', 255)->nullable();
            $table->string('videopel', 255)->nullable();
            $table->string('dokumen', 255)->nullable();
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
        Schema::dropIfExists('smpduas');
    }
}
