<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWasteRegulationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waste_regulations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('waste_r_k_c_countries')->onUpdate('cascade')->onDelete('cascade');
            $table->string('eu_members')->nullable();
            $table->string('oecd')->nullable();
            $table->string('link1')->nullable();
            $table->string('link2')->nullable();
            $table->string('link3')->nullable();
            $table->string('link4')->nullable();
            $table->string('link5')->nullable();
            $table->string('link6')->nullable();
            $table->string('link7')->nullable();
            $table->string('link8')->nullable();
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
        Schema::dropIfExists('waste_regulations');
    }
}
