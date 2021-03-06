<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operations', function (Blueprint $table) {
            $table->id('id_oper');
            $table->string('risk');
            $table->string('posibility');
            $table->string('impact');
            $table->string('mitigation');
            $table->foreign('permit_id')->references('id_permit')->on('permits');
            $table->unsignedBigInteger('permit_id')->unsigned();      
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
        Schema::dropIfExists('operations');
    }
}
