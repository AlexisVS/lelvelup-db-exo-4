<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOncallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oncalls', function (Blueprint $table) {
            $table->id();
            $table->foreignId('infirmier_id')->constrained();
            $table->integer('block_stage');
            $table->integer('block_code');
            $table->date('schedure_begin');
            $table->date('schedure_ending');
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
        Schema::dropIfExists('oncalls');
    }
}
