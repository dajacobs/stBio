<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RvdbDemographyTableSeeder extends Seeder {

  public function run()
  {
    $faker = Faker::create();
    DB::connection('rvdb')->table('demography')->delete();
    for($i = 0; $i < 100; $i++) {
      DB::connection('rvdb')->insert('insert into demography(subject_Id,PT_INITIALS_NAME,PER_BIR_DT,PER_BIR_DT_RAW,PER_BIR_DT_INT,PER_BIR_DT_YYYY,PER_BIR_DT_MM,PER_BIR_DT_DD,ETHN_GRP_CAT_TXT,ETHN_GRP_CAT_TXT_STD,PERSON_GENDER,PERSON_GENDER_STD,COUNTRY_CD,COUNTRY_CD_STD,ADDR_POSTAL_CD,PAYMENT_METHOD,PAYMENT_METHOD_STD,RACE_CAT_TXT,RACE_CAT_TXT_STD) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', [
        $faker->randomDigit(),
          $faker->randomDigit(),
          $faker->date(),
          $faker->realText(),
          $faker->randomDigit(),
          $faker->randomDigit(),
          $faker->randomDigit(),
          $faker->randomDigit(),
          $faker->realText(),
          $faker->randomDigit(),
          $faker->realText(),
          $faker->randomDigit(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText()
        ]);
    }
  }

}
