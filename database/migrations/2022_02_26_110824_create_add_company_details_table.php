<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddCompanyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_company_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->string('company_email')->unique();
            $table->bigInteger('phone');
            $table->string('company_website');
            $table->string('description');
            $table->string('companyfy');
            $table->string('address');
            $table->string('warehouse');
            $table->bigInteger('vat_id');
            $table->bigInteger('tax_id');
            $table->bigInteger('reg_id');
            $table->string('court');
            $table->string('linkedin');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('insta');
            $table->string('file');
            $table->string('image');
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
        Schema::dropIfExists('add_company_details');
    }
}
