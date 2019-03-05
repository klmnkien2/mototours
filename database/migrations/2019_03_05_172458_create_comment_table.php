<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateCommentTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('comment',function(Blueprint $table){
            $table->increments("id");
            $table->string("name")->nullable();
            $table->string("year")->nullable();
            $table->text("description")->nullable();
            $table->string("photo")->nullable();
            $table->integer("tours_id")->references("id")->on("tours")->nullable();
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
        Schema::drop('comment');
    }

}