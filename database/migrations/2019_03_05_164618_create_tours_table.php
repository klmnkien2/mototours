<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateToursTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('tours',function(Blueprint $table){
            $table->increments("id");
            $table->string("name")->nullable();
            $table->string("location")->nullable();
            $table->text("description")->nullable();
            $table->string("start_finish")->nullable();
            $table->string("nearest_airport")->nullable();
            $table->string("duration")->nullable();
            $table->string("route")->nullable();
            $table->string("accommodation")->nullable();
            $table->string("rest_day")->nullable();
            $table->text("highlights")->nullable();
            $table->string("minimum_participant")->nullable();
            $table->string("itinerary")->nullable();
            $table->string("book_info")->nullable();
            $table->string("price_info")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tours');
    }

}