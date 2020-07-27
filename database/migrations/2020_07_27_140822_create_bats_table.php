<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bats', function (Blueprint $table) {
            $table->id();
            $table->integer('player_id');
            $table->integer('inning');
            $table->date('date');
            $table->integer('balls');
            $table->integer('strikes');
            $table->string('outcome');
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
        Schema::dropIfExists('bats');
    }
}
