<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
          $table->increments('id');

          $table->string('name', 100);
          $table->string('title', 20)->nullable();
          $table->string('sex', 1)->nullable();
          $table->smallInteger('strength');
          $table->smallInteger('dexterity');
          $table->smallInteger('endurance');
          $table->smallInteger('intelligence');
          $table->smallInteger('education');
          $table->smallInteger('social');

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
        Schema::dropIfExists('characters');
    }
}
