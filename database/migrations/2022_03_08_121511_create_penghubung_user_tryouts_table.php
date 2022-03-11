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
        Schema::create('penghubung_users_tryouts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('users_id');
            $table->foreignId('tryouts_id');
            $table->boolean('status_pengerjaan');
            $table->Integer('nilai');
        });

        Schema::table('penghubung_users_tryouts', function (Blueprint $table) {
            //
            $table->foreign('users_id')
            ->references('id')->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('tryouts_id')
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
        Schema::dropIfExists('penghubung_user_tryouts');
    }
}
