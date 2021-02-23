<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserves', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cakeid'); // 
            $table->date('date');  // 
            $table->string('time'); // 
            $table->string('name');  // 
            $table->string('tel'); // 
            $table->integer('stuffid');  // 
            $table->text('message')->nullable();  //
            $table->string('candle')->nullable();  //
            $table->text('note')->nullable();  //
            $table->boolean('payment')->nullable();  //
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
        Schema::dropIfExists('reserves');
    }
}
