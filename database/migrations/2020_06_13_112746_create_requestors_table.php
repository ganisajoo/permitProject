<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requestors', function (Blueprint $table) {
            $table->id('req_id');
            $table->string('name');
            $table->string('nik')->unique();
            $table->string('email')->unique();
            $table->string('department');
            $table->bigInteger('phone');
            $table->string('purpose');
            $table->string('time_range');
            $table->string('akses');
            $table->string('akses_type');
            $table->string('area');
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
        Schema::dropIfExists('requestors');
    }
}
