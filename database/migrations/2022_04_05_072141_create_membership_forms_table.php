<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membership_forms', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('company_name');
            $table->string('company_scope');
            $table->string('address');
            $table->string('country');
            $table->string('city');
            $table->bigInteger('zip_code')->length(5);
            $table->string('company_email')->unique();
            $table->string('company_website');
            $table->string('m_type');
            $table->string('industry')->nullable();
            $table->string('type')->nullable();
            $table->string('firstname');
            $table->string('last_scope');
            $table->bigInteger('phone');
            $table->string('gender');
            $table->binary('image');
            $table->string('company_document');
            $table->string('name_on_card');
            $table->bigInteger('card_no');
            $table->string('expiration');
            $table->bigInteger('cvv');
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
        Schema::dropIfExists('membership_forms');
    }
}
