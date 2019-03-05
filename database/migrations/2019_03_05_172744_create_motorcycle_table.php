<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateMotorcycleTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('motorcycle',function(Blueprint $table){
            $table->increments("id");
            $table->string("name");
            $table->string("brand");
            $table->string("seat_height")->nullable();
            $table->string("weight")->nullable();
            $table->string("capacity")->nullable();
            $table->string("performance")->nullable();
            $table->text("description")->nullable();
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
        Schema::drop('motorcycle');
    }

}