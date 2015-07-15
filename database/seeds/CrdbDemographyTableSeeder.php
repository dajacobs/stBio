<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CrdbDemographyTableSeeder extends Seeder {

  public function run()
  {
    $faker = Faker::create();
    DB::connection('crdb')->table('demography')->delete();
    for($i = 0; $i < 10; $i++) {
      DB::connection('crdb')->insert('insert into demography(Accession_Nbr, BirthDate, CauseCodeID, Cause_CD, CurrDiseaseStatus, CurrDiseaseStatusEvalDate, CurrDiseaseStatus_CD, CurrentRisk, CurrentRisk_CD, DateInserted, DateOfLastContact, Death, Diagnosis, DiagnosisDate, DiagnosisID_CD, EnrollingInstitution, EnrollingInstitutionID_CD, Ethnicity, Ethnicity_CD, FirstCRDate, FirstCRPhase, FirstCRPhase_CD, FirstName, Gender, Gender_CD, INitialRisk, InitialRisk_CD, LastName, MRN, MediastinumAtDx, MiddleName, Nathionality, Nationality_CD, OffStudyDate, OffTherpyDate, PatientID, PersonID, ProtocolID, ProtocolMnemonic, Race, Race_CD, RandomizedArm, RandomizedArm_CD, ReasonOffStudy, ReasonOffStudy_CD, ReasonOffTherapy, ReasonOffTherapy_CD, SecondaryCauseCodeID, SurvivalStatus, SurvivalStatus_CD, TesticularAtDx, TesticularAtDx_CD, TransplantDate) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', [
        $faker->realText(),
          $faker->date(),
          $faker->randomDigit(),
          $faker->randomDigit(),
          $faker->realText(),
          $faker->date(),
          $faker->randomDigit(),
          $faker->realText(),
          $faker->randomDigit(),
          $faker->date(),
          $faker->date(),
          $faker->realText(),
          $faker->realText(),
          $faker->date(),
          $faker->randomDigit(),
          $faker->realText(),
          $faker->randomDigit(),
          $faker->realText(),
          $faker->randomDigit(),
          $faker->date(),
          $faker->realText(),
          $faker->randomDigit(),
          $faker->realText(),
          $faker->realText(),
          $faker->randomDigit(),
          $faker->realText(),
          $faker->randomDigit(),
          $faker->realText(),
          $faker->randomDigit(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->randomDigit(),
          $faker->date(),
          $faker->date(),
          $faker->randomDigit(),
          $faker->randomDigit(),
          $faker->randomDigit(),
          $faker->realText(),
          $faker->realText(),
          $faker->randomDigit(),
          $faker->realText(),
          $faker->randomDigit(),
          $faker->realText(),
          $faker->randomDigit(),
          $faker->realText(),
          $faker->randomDigit(),
          $faker->randomDigit(),
          $faker->realText(),
          $faker->randomDigit(),
          $faker->realText(),
          $faker->realText(),
          $faker->date()
        ]);
    }
  }

}
