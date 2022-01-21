<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchant', function (Blueprint $table) {
            $table->id();
            $table->string('adress_link');
            $table->string('adress_string');
            $table->string('business_tagline');
            $table->string('close_day');
            $table->string('close_hour');
            $table->string('contact_number');
            $table->string('merch_capacity');
            $table->string('merch_description');
            $table->bigInteger('merch_facilities');
            $table->bigInteger('merch_gallery');
            $table->bigInteger('merch_menu');
            $table->string('merch_name');
            $table->bigInteger('merch_owner_user_id');
            $table->bigInteger('merch_payment_method');
            $table->string('merch_photo');
            $table->bigInteger('merch_reaches');
            $table->string('open_day');
            $table->string('open_hour');
            
            $table->softDeletes();
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
        Schema::dropIfExists('merchant');
    }
}
