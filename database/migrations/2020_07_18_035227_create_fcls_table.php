<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFclsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fcls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('container_type');
            $table->integer('container_quantity');
            $table->integer('cross_weight')->nullable();
            $table->integer('ftl_request_id');
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
        Schema::dropIfExists('fcls');
    }
}
