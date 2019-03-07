<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->string("type")->nullable();
            $table->integer("price")->nullable();
            $table->integer("tours_id")->unsigned()->index();
            $table->integer("motorcycle_id")->unsigned()->index();
            $table->foreign('tours_id')->references('id')->on('tours')->onDelete('cascade');
            $table->foreign('motorcycle_id')->references('id')->on('motorcycle')->onDelete('cascade');
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
        Schema::dropIfExists('tour_prices');
    }
}
