<?php namespace Academy\Arrival\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateArrivalsTable extends Migration
{
    public function up()
    {
        Schema::create('academy_arrival_arrivals', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->integer('user_id')->nullable();
            $table->timestamp('arrival')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('academy_arrival_arrivals');
    }
}
