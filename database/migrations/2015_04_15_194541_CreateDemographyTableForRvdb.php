<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemographyTableForRvdb extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

    Config::set('database.default', 'rvdb');

		Schema::create('demography', function(Blueprint $table)
		{
      $table->integer('subject_Id');
      $table->integer('PT_INITIALS_NAME');
      $table->date('PER_BIR_DT');
      $table->string('PER_BIR_DT_RAW');
      $table->integer('PER_BIR_DT_INT');
      $table->integer('PER_BIR_DT_YYYY');
      $table->integer('PER_BIR_DT_MM');
      $table->integer('PER_BIR_DT_DD');
      $table->string('ETHN_GRP_CAT_TXT');
      $table->integer('ETHN_GRP_CAT_TXT_STD');
      $table->string('PERSON_GENDER');
      $table->integer('PERSON_GENDER_STD');
      $table->string('COUNTRY_CD');
      $table->string('COUNTRY_CD_STD');
      $table->string('ADDR_POSTAL_CD');
      $table->string('PAYMENT_METHOD');
      $table->string('PAYMENT_METHOD_STD');
      $table->string('RACE_CAT_TXT');
      $table->string('RACE_CAT_TXT_STD');
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
    Config::set('database.default', 'rvdb');
		Schema::drop('demography');
    Config::set('database.default', 'biostats');
	}

}
