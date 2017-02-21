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
            $table->smallInteger('strength')->unsigned();
            $table->smallInteger('dexterity')->unsigned();
            $table->smallInteger('endurance')->unsigned();
            $table->smallInteger('intelligence')->unsigned();
            $table->smallInteger('education')->unsigned();
            $table->smallInteger('social')->unsigned();

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
