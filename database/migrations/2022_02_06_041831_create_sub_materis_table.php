<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubMaterisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_materis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sub_materi');
            $table->string('slug')->unique();
            $table->foreignId('materi_id');
            $table->timestamps();
        });

        Schema::table('sub_materis', function (Blueprint $table) {
            //
            $table->foreign('materi_id')
            ->references('id')->on('materis')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_materis');
    }
}
