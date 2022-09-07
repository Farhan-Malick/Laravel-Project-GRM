<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients_ads', function (Blueprint $table) {
            $table->id();
            $table->boolean('approve')->nullable();
            $table->string('main_type');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('sub_category');
            $table->foreign('sub_category')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->string('p_name');
            $table->string('title');
            $table->string('description',1500);
            $table->string('condition');
            $table->BigInteger('quantity_avl');
            $table->string('unit_weight');
            $table->string('product_weight');
            $table->string('supply_type');
            $table->string('currency');
            $table->BigInteger('price');
            $table->string('p_terms');
            $table->string('col_address');
            $table->string('country');
            $table->string('location');
            $table->string('payment_terms');
            $table->BigInteger('zip_code')->length(5);
            $table->string('listing_options');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->string('image6')->nullable();
            $table->string('image7')->nullable();
            $table->string('image8')->nullable();
            $table->string('image9')->nullable();
            $table->string('image10')->nullable();
            $table->string('image11')->nullable();
            $table->string('image12')->nullable();
            $table->string('image13')->nullable();
            $table->string('image14')->nullable();
            $table->string('image15')->nullable();
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
        Schema::dropIfExists('clients_ads');
    }
}
