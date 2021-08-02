<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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

            // personal details
            $table->string('name', 100);
            $table->string('title', 20)->nullable();
            $table->smallInteger('age')->unsigned()->default(18);
            $table->string('sex', 1)->nullable();

            // service history
            $table->string('service', 20)->nullable();
            $table->string('rank', 20)->nullable();
            $table->smallInteger('terms_of_service')->unsigned()->default(0);
            $table->boolean('retired')->default(false);

            // UPP
            $table->smallInteger('strength')->unsigned();
            $table->smallInteger('dexterity')->unsigned();
            $table->smallInteger('endurance')->unsigned();
            $table->smallInteger('intelligence')->unsigned();
            $table->smallInteger('education')->unsigned();
            $table->smallInteger('social')->unsigned();

            // assets
            $table->smallInteger('credits')->unsigned()->default(0);
            $table->smallInteger('retirement_pay')->unsigned()->default(0);
            $table->smallInteger('high_passage')->unsigned()->default(0);
            $table->smallInteger('middle_passage')->unsigned()->default(0);
            $table->smallInteger('low_passage')->unsigned()->default(0);
            $table->boolean('tas_membership')->default(false);

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
