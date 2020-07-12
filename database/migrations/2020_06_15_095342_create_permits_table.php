<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permits', function (Blueprint $table) {
            $table->id('id_permit');
            $table->string('name');
            $table->string('purpose');
            $table->string('time_range');
            $table->string('akses');
            $table->string('akses_type');
            $table->string('area');
            $table->text('procedure');
            $table->text('testing');
            $table->text('rollback');           
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
        Schema::dropIfExists('permits');
    }
}
