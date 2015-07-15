<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemographyTableForCrdb extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

    Config::set('database.default', 'crdb');

		Schema::create('demography', function(Blueprint $table)
		{
      $table->string('Accession_Nbr');
      $table->date('BirthDate');
      $table->integer('CauseCodeID');
      $table->integer('Cause_CD');
      $table->string('CurrDiseaseStatus');
      $table->date('CurrDiseaseStatusEvalDate');
      $table->integer('CurrDiseaseStatus_CD');
      $table->string('CurrentRisk');
      $table->integer('CurrentRisk_CD');
      $table->date('DateInserted');
      $table->date('DateOfLastContact');
      $table->string('Death');
      $table->string('Diagnosis');
      $table->date('DiagnosisDate');
      $table->integer('DiagnosisID_CD');
      $table->string('EnrollingInstitution');
      $table->integer('EnrollingInstitutionID_CD');
      $table->string('Ethnicity');
      $table->integer('Ethnicity_CD');
      $table->date('FirstCRDate');
      $table->string('FirstCRPhase');
      $table->integer('FirstCRPhase_CD');
      $table->string('FirstName');
      $table->string('Gender');
      $table->integer('Gender_CD');
      $table->string('INitialRisk');
      $table->integer('InitialRisk_CD');
      $table->string('LastName');
      $table->integer('MRN');
      $table->string('MediastinumAtDx');
      $table->string('MiddleName');
      $table->string('Nathionality');
      $table->integer('Nationality_CD');
      $table->date('OffStudyDate');
      $table->date('OffTherpyDate');
      $table->integer('PatientID');
      $table->integer('PersonID');
      $table->integer('ProtocolID');
      $table->string('ProtocolMnemonic');
      $table->string('Race');
      $table->integer('Race_CD');
      $table->string('RandomizedArm');
      $table->integer('RandomizedArm_CD');
      $table->string('ReasonOffStudy');
      $table->integer('ReasonOffStudy_CD');
      $table->string('ReasonOffTherapy');
      $table->integer('ReasonOffTherapy_CD');
      $table->integer('SecondaryCauseCodeID');
      $table->string('SurvivalStatus');
      $table->integer('SurvivalStatus_CD');
      $table->string('TesticularAtDx');
      $table->string('TesticularAtDx_CD');
      $table->date('TransplantDate');
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
		Schema::drop('demography');
    Config::set('database.default', 'biostats');
	}

}
