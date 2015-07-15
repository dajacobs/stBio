<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToxicityTableForCrdb extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

    Config::set('database.default', 'crdb');

		Schema::create('toxicity', function(Blueprint $table)
		{
        $table->string('AEComments');
        $table->string('AEOtherDetail');
        $table->string('AERelationship');
        $table->integer('AERelationship_CD');
        $table->string('Accession_Nbr');
        $table->string('Category');
        $table->integer('Category_cd');
        $table->date('DateInserted');
        $table->date('EndDate');
        $table->string('EventDesc');
        $table->string('EventDesc_CD');
        $table->string('Expected');
        $table->string('LastName');
        $table->integer('MRN');
        $table->date('OnsetDate');
        $table->string('PhaseDescroption');
        $table->integer('PhaseDescription_CD');
        $table->integer('ResolveDate');
        $table->string('Risk');
        $table->integer('Risk_CD');
        $table->date('StartDate');
        $table->string('ToxDesc');
        $table->integer('ToxDesc_CD');
        $table->integer('Toxicity');
        $table->integer('Toxicity_CD');
        $table->string('WasThisSAE');
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
    Config::set('database.default', 'crdb');
		Schema::drop('toxicity');
    Config::set('database.default', 'biostats');
	}

}
