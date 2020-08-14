<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_customer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('place_landing')->nullable();
            $table->string('place_discharge')->nullable();
            $table->string('port_landing')->nullable();
            $table->string('port_discharge')->nullable();
            $table->string('commodity')->nullable();
            $table->string('container_type')->nullable();
            $table->string('charge_type')->nullable();
            $table->string('valid_from')->nullable();
            $table->string('valid_to')->nullable();
            $table->string('shipping_line')->nullable();
            $table->string('date_landing')->nullable();
            $table->string('date_discharge')->nullable();
            $table->string('transit_time')->nullable();
            $table->integer('freight_charges')->nullable();
            $table->integer('origin_charges')->nullable();
            $table->integer('destination_charges')->nullable();
            $table->integer('sub_id')->nullable();
            $table->boolean('offer')->nullable();
            $table->integer('time_per_hour')->nullable();
            $table->string('language')->nullable();
            $table->integer('weight')->nullable();
            $table->enum('type',['LCL','FCL','Bulk']);
            $table->integer('dns')->nullable();
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
        Schema::dropIfExists('tbl_customer');
    }
}
