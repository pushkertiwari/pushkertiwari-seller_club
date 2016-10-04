<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('postcode_report');
            $table->string('company_name');
            $table->string('contact_name');
            $table->string('mobile_number');
            $table->string('email_address');
            $table->string('how_did_you_find');
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
        Schema::dropIfExists('agent_details');
    }
}
