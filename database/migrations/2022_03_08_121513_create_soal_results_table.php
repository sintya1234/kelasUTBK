<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoalResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soal_results', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('id_penghubung_ut');
            $table->foreignId('soal_tryout_id');
            $table->integer('jawaban_benar');
            $table->integer('jawaban_salah');
            $table->integer('jawaban_kosong');
        });

        Schema::table('soal_results', function (Blueprint $table) {
            //
            $table->foreign('id_penghubung_ut')
            ->references('id')->on('penghubung_users_tryouts')
            ->onDelete('cascade')
            ->onUpdate('cascade');

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
        Schema::dropIfExists('soal_results');
    }
}
