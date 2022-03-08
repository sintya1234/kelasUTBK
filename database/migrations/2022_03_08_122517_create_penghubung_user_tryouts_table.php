<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenghubungUserTryoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penghubung_user_tryouts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('users_id');
            $table->foreignId('tryouts_id');
            $table->boolean('status_pengerjaan');
            $table->Integer('nilai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penghubung_user_tryouts');
    }
}
