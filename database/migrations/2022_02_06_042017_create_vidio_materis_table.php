<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVidioMaterisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vidio_materis', function (Blueprint $table) {
            $table->id();
            $table->string('judul_vidio_materi');
            $table->string('file_vidio_materi');
            $table->foreignId('bab_materi_id');
            $table->timestamps();
        });

        Schema::table('vidio_materis', function (Blueprint $table) {
            //
            $table->foreign('bab_materi_id')
            ->references('id')->on('bab_materis')
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
        Schema::dropIfExists('vidio_materis');
    }
}
