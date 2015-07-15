<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SirdbDemographyTableSeeder extends Seeder {

    public function run()
    {
      $faker = Faker::create();

      DB::connection('sirdb')->table('demography')->delete();

      for($i = 0; $i < 10; $i++) {
        DB::connection('sirdb')->insert('insert into demography (ANC,APC,AXILLARY,BIRTH,BLASTS,BLST_CSF,CERVICAL,CNS,Cytoeval,DISEASE,DNA_INDX,E_ROSET,FAB,HGB,ID,IMMUNOPH,INGUINAL,LDH,LIVER,MARROW,MASS,MULTSTEM,NAME,NODAL,PHILCHRO,PLATELET,PLOIDY,PRE_B,RACE,RISK13,RSKX,RISKXI,SEX,SPLEEN,STUDYNO,T12x21,T1x19,T4x11,TESTICLR,TRANSFUS,TRANSLOC,TREATMNT,WBC_CSF,age_dx,bcrabl,day15bma,e2apbx,mll,mllaf4,telaml,telgene,wbc) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', [
          $faker->realText(),
          $faker->randomDigit(),
          $faker->realText(),
          $faker->date(),
          $faker->randomDigit(),
          $faker->randomDigit(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->randomDigit(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->randomDigit(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->randomDigit(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->randomDigit(),
          $faker->randomDigit(),
          $faker->randomDigit(),
          $faker->randomDigit(),
          $faker->randomDigit(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->randomDigit()
        ]);

      }

    }

}
