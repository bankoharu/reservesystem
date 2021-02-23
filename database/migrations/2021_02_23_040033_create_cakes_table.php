<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCakesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cakes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cakename'); 
            $table->integer('price');
            $table->text('info');//アレルギー情報
            $table->string('image_path')->nullable();  // 画像のパスを保存するカラム
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
        Schema::dropIfExists('cakes');
    }
}
