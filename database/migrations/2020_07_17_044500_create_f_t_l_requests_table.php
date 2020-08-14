<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFTLRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f_t_l_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('country_loading');
            $table->integer('country_discharge');
            $table->integer('port_loading')->nullable();
            $table->integer('port_discharge')->nullable();
            $table->date('request_date')->nullable();
            $table->enum('type',['LCL','FCL','Bulk']);
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->integer('cross_weight')->nullable();
            $table->string('company_name')->nullable();
            $table->string('note')->nullable();
            $table->string('file')->nullable();
            $table->smallInteger('lcl_total_volume')->nullable();
            $table->enum('lcl_type',['total', 'untis'])->nullable();
            $table->smallInteger('lcl_untis_lenght')->nullable();
            $table->smallInteger('lcl_untis_width')->nullable();
            $table->smallInteger('lcl_untis_hieght')->nullable();
            $table->smallInteger('lcl_untis_quantity')->nullable();
            $table->smallInteger('bulk_type')->nullable();
            $table->smallInteger('bulk_loading_rate')->nullable();
            $table->smallInteger('bulk_discharge_rate')->nullable();
            $table->smallInteger('category_id')->nullable();
            $table->smallInteger('product')->nullable();
            $table->integer('client_id')->nullable();
            $table->integer('sub_id')->nullable();
            $table->boolean('imo')->nullable();
            $table->enum('booking',['reserved','unReserved'])->default('unReserved')->nullable();

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
        Schema::dropIfExists('f_t_l_requests');
    }
}
