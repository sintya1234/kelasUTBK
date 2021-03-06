<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankSoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_soals', function (Blueprint $table) {
            $table->id();
            $table->string('judul_bank_soal');
            $table->string('slug')->unique();
            $table->string('file_bank_soal');
            $table->foreignId('materi_id');
            $table->timestamps();
        });

        Schema::table('bank_soals', function (Blueprint $table) {
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
        Schema::dropIfExists('bank_soals');
    }
}
