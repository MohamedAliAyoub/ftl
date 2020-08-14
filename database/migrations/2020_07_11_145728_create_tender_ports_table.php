<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenderPortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tender_ports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('port_id');
            $table->morphs('parent');

            $table->unsignedInteger('20D_old_price')->nullable();
            $table->unsignedInteger('40HD_old_price')->nullable();
            $table->unsignedInteger('20RF_old_price')->nullable();
            $table->unsignedInteger('40RF_old_price')->nullable();

            $table->unsignedInteger('20D_price')->nullable();
            $table->unsignedInteger('40HD_price')->nullable();
            $table->unsignedInteger('20RF_price')->nullable();
            $table->unsignedInteger('40RF_price')->nullable();

            $table->unsignedInteger('20D_quantity')->nullable();
            $table->unsignedInteger('40HD_quantity')->nullable();
            $table->unsignedInteger('20RF_quantity')->nullable();
            $table->unsignedInteger('40RF_quantity')->nullable();

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
        Schema::dropIfExists('tender_ports');
    }
}
