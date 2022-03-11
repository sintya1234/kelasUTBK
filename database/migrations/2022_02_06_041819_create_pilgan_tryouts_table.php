<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePilganTryoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pilgan_tryouts', function (Blueprint $table) {
            $table->id();
            $table->string('pilihan_ganda');
            $table->boolean('status_benar');
            $table->foreignId('soal_tryout_id');
            $table->timestamps();
        });

        Schema::table('pilgan_tryouts', function (Blueprint $table) {
            //
            $table->foreign('soal_tryout_id')
            ->references('id')->on('soal_tryouts')
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
        Schema::dropIfExists('pilgan_tryouts');
    }
}
