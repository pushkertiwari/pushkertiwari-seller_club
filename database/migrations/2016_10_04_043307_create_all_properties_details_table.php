<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllPropertiesDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_properties_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('property_user_id');
            $table->string('name');
            $table->string('email');
            $table->string('property_status');
            $table->string('photo_id');
            $table->string('upload_council_water_doc');
            $table->string('Property_address');
            $table->string('postal_address');
            $table->string('price_expectation');

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
        Schema::dropIfExists('all_properties_details');
    }
}
