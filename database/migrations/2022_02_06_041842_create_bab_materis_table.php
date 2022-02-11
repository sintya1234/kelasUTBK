<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBabMaterisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bab_materis', function (Blueprint $table) {
            $table->id();
            $table->string('judul_bab');
            $table->string('slug')->unique();
            $table->string('file_materi')->nullable();
            $table->foreignId('sub_materi_id');

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
        Schema::dropIfExists('bab_materis');
    }
}
