<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreatePagesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('pages',function(Blueprint $table){
            $table->increments("id");
            $table->string("title_en");
            $table->string("title_fr")->nullable();
            $table->string("title_de")->nullable();
            $table->string("title_es")->nullable();
            $table->text("content_en")->nullable();
            $table->text("content_fr")->nullable();
            $table->text("content_de")->nullable();
            $table->text("content_es")->nullable();
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
        Schema::drop('pages');
    }

}