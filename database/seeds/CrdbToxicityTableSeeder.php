<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CrdbToxicityTableSeeder extends Seeder {

    public function run()
    {
      $faker = Faker::create();
      DB::connection('crdb')->table('toxicity')->delete();
      for($i = 0; $i < 10; $i++) {
        DB::connection('crdb')->insert('insert into toxicity(AEComments,AEOtherDetail,AERelationship,AERelationship_CD,Accession_Nbr,Category,Category_cd,DateInserted,EndDate,EventDesc,EventDesc_CD,Expected,LastName,MRN,OnsetDate,PhaseDescroption,PhaseDescription_CD,ResolveDate,Risk,Risk_CD,StartDate,ToxDesc,ToxDesc_CD,Toxicity,Toxicity_CD,WasThisSAE) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', [
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->randomDigit(),
          $faker->realText(),
          $faker->realText(),
          $faker->randomDigit(),
          $faker->date(),
          $faker->date(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->randomDigit(),
          $faker->date(),
          $faker->realText(),
          $faker->randomDigit(),
          $faker->randomDigit(),
          $faker->realText(),
          $faker->randomDigit(),
          $faker->date(),
          $faker->realText(),
          $faker->randomDigit(),
          $faker->randomDigit(),
          $faker->randomDigit(),
          $faker->realText(),
        ]);
      }

    }
}
