<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemographyTableForSirdb extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

    Config::set('database.default', 'sirdb');

		Schema::create('demography', function(Blueprint $table)
		{
      $table->string('ANC');
      $table->integer('APC');
      $table->string('AXILLARY');
      $table->date('BIRTH');
      $table->integer('BLASTS');
      $table->integer('BLST_CSF');
      $table->string('CERVICAL');
      $table->string('CNS');
      $table->string('Cytoeval');
      $table->string('DISEASE');
      $table->integer('DNA_INDX');
      $table->string('E_ROSET');
      $table->string('FAB');
      $table->string('HGB');
      $table->integer('ID');
      $table->string('IMMUNOPH');
      $table->string('INGUINAL');
      $table->string('LDH');
      $table->string('LIVER');
      $table->string('MARROW');
      $table->string('MASS');
      $table->string('MULTSTEM');
      $table->string('NAME');
      $table->string('NODAL');
      $table->string('PHILCHRO');
      $table->string('PLATELET');
      $table->string('PLOIDY');
      $table->string('PRE_B');
      $table->string('RACE');
      $table->string('RISK13');
      $table->string('RSKX');
      $table->string('RISKXI');
      $table->string('SEX');
      $table->string('SPLEEN');
      $table->integer('STUDYNO');
      $table->string('T12x21');
      $table->string('T1x19');
      $table->string('T4x11');
      $table->string('TESTICLR');
      $table->string('TRANSFUS');
      $table->string('TRANSLOC');
      $table->string('TREATMNT');
      $table->integer('WBC_CSF');
      $table->integer('age_dx');
      $table->integer('bcrabl');
      $table->integer('day15bma');
      $table->integer('e2apbx');
      $table->string('mll');
      $table->string('mllaf4');
      $table->string('telaml');
      $table->string('telgene');
      $table->integer('wbc');
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
		Schema::drop('demography');
    Config::set('database.default', 'biostats');
	}

}
