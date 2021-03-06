<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmaduasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smaduas', function (Blueprint $table) {
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
        Schema::dropIfExists('smaduas');
    }
}
