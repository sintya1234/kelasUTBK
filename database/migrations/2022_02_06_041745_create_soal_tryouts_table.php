<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoalTryoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soal_tryouts', function (Blueprint $table) {
            $table->id();
            $table->string('pertanyaan_soal');
            $table->foreignId('tryout_id');
            $table->timestamps();
        });

        Schema::table('soal_tryouts', function (Blueprint $table) {
            //
            $table->foreign('tryout_id')
            ->references('id')->on('tryouts')
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
        Schema::dropIfExists('soal_tryouts');
    }
}
