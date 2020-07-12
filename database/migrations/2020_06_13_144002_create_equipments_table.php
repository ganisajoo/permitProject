<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipments', function (Blueprint $table) {
            $table->id('id_equip');
            $table->string('name');
            $table->string('brand');
            $table->string('serial_number')->unique();
            $table->integer('qty');
            $table->foreign('permit_id')->references('id_permit')->on('permits');
            $table->unsignedBigInteger('permit_id');                   
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
        Schema::dropIfExists('equipments');
    }
}
