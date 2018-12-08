<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDscansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dscans', function (Blueprint $table) {
            $table->string('sid', 45);
            $table->string('ship_names');
            $table->string('ship_types');
            $table->string('ship_classes');
            $table->integer('ship_total');
            $table->dateTime('reportedAt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dscans');
    }
}
