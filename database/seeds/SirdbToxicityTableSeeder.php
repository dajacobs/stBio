<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SirdbToxicityTableSeeder extends Seeder {

    public function run()
    {
      $faker = Faker::create();

      DB::connection('sirdb')->table('toxicity')->delete();

      for($i = 0; $i < 10; $i++) {
        DB::connection('sirdb')->insert('insert into toxicity (BIRHT,COMMENT,DAYSHOSP,DUR_DAYS,DXDATE,GRADE,ID,LFUDATE,MODREC8,NAME,PHASE,PULSE,STUDY,STUDYNO,TDATE1,TDATE2,TIXCLASS,USRREC8,VERREC8,WEEKNO,pulseno) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', [
            $faker->date(),
            $faker->realText(),
            $faker->randomDigit(),
            $faker->randomDigit(),
            $faker->date(),
            $faker->randomDigit(),
            $faker->randomDigit(),
            $faker->date(),
            $faker->randomDigit(),
            $faker->realText(),
            $faker->realText(),
            $faker->realText(),
            $faker->realText(),
            $faker->realText(),
            $faker->date(),
            $faker->date(),
            $faker->realText(),
            $faker->realText(),
            $faker->randomDigit(),
            $faker->randomDigit(),
            $faker->randomDigit()
        ]);
      }

    }

}
