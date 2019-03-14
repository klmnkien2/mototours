<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourDestinationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_destination', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sort');
            $table->integer("tours_id")->unsigned()->index();
            $table->foreign('tours_id')->references('id')->on('tours')->onDelete('cascade');
            $table->integer("destination_id")->unsigned()->index();
            $table->foreign('destination_id')->references('id')->on('destination')->onDelete('cascade');
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
        Schema::dropIfExists('tour_destination');
    }
}
