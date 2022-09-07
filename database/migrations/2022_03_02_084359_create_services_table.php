<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('h1_b1');
            $table->string('p1_b1')->length(400);
            $table->string('h2_b2');
            $table->string('p2_b2')->length(400);
            $table->string('h3_b3');
            $table->string('p3_b3')->length(400);
            $table->string('h4_b4');
            $table->string('p4_b4')->length(400);
            $table->string('h5_b5');
            $table->string('p5_b5')->length(400);
            $table->string('h6_b6');
            $table->string('p6_b6')->length(400);
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
        Schema::dropIfExists('services');
    }
}
