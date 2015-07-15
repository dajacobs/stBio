<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToxicityTableForSirdb extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

    Config::set('database.default', 'sirdb');

		Schema::create('toxicity', function(Blueprint $table)
		{
      $table->date('BIRHT');
      $table->string('COMMENT');
      $table->integer('DAYSHOSP');
      $table->integer('DUR_DAYS');
      $table->date('DXDATE');
      $table->integer('GRADE');
      $table->integer('ID');
      $table->date('LFUDATE');
      $table->integer('MODREC8');
      $table->string('NAME');
      $table->string('PHASE');
      $table->string('PULSE');
      $table->string('STUDY');
      $table->string('STUDYNO');
      $table->date('TDATE1');
      $table->date('TDATE2');
      $table->string('TIXCLASS');
      $table->string('USRREC8');
      $table->integer('VERREC8');
      $table->integer('WEEKNO');
      $table->integer('pulseno');
		});

    Config::set('database.default', 'biostats');

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
    Config::set('database.default', 'sirdb');
		Schema::drop('toxicity');
    Config::set('database.default', 'biostats');
	}

}
