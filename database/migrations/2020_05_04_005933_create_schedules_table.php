<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('availableDate');
            $table->time('timeStart');
            $table->time('timeEnd');
            $table->bigInteger('serviceProviderId')->unsigned();
            $table->boolean('isActive')->default(true);
            $table->boolean('isGap')->default(false);
            $table->foreign('serviceProviderId')->references('id')->on('providers')
                ->onDelete('cascade');
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
        Schema::dropIfExists('schedules');
    }
}
