<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIzinguruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('izinguru', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('izin_id');
            $table->unsignedBigInteger('guru_id');
            $table->String('tugas');
            $table->timestamps();
            $table->foreign('izin_id')->references('id')->on('izin');
            $table->foreign('guru_id')->references('id')->on('guru');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('izinguru');
    }
}
