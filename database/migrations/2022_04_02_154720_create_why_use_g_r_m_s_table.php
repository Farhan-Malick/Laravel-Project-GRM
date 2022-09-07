<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhyUseGRMSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('why_use_g_r_m_s', function (Blueprint $table) {
            $table->id();
            $table->string('heading');
            $table->string('p1');
            $table->string('p2');
            $table->string('p3');
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
        Schema::dropIfExists('why_use_g_r_m_s');
    }
}
