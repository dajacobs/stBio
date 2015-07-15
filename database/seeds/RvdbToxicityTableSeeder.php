<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RvdbToxicityTableSeeder extends Seeder {

  public function run()
  {
    $faker = Faker::create();
    DB::connection('rvdb')->table('toxicity')->delete();

    for($i = 0; $i < 10; $i++) {
      DB::connection('rvdb')->insert('insert into toxicity (Subject,CTCAE4_LLT_NM,CTCAE4_LLT_NM_STD,AE_VERBATIM_TRM_TXT,AE_SEV_GD,AE_SEV_GD_STD,AE_ONSET_DT_DD,AE_ONSET_DT_RAW,AE_ONSET_DT_INT,AE_ONSET_DT_YYYY,AE_ONSET_DT_MM,PT_TOX_HOSP_IND,PT_TOX_HOSP_IND_STD,AE_RESOLV_ALDT,AE_RESOLV_ALDT_STD,MEDDRA_SOC_TRM_NM,MEDDRA_SOC_TRM_NM_STD,CTCAE4_M_LLTMEDDRACD,CTCAE4_M_LLTMEDDRACD_STD,CTC_AE_ATTR_SCALE,CTC_AE_ATTR_SCALE_STD,AE_EXPECT_IND,AE_EXPECT_IND_STD,AE_SERIOUS_IND,AE_SERIOUS_IND_STD,AE_ONGOING_EVENT_IND,AE_ONGOING_EVENT_IND_STD,AE_OUTCOME_TXT_TP,AE_OUTCOME_TXT_TP_STD,RSCH_COMMENTS_TXT,SAE_DESC_RSN_TXT,SAE_DESC_RSN_TXT_STD,DOSE_LIMT_TOX_IND,DOSE_LIMT_TOX_IND_STD,GRADE_DESC,GRADE_DESC_STD,CATEGORY_ID,CATEGORY_ID_RAW,CURRENT_TIMESTAMP_,CURRENT_TIMESTAMP__RAW,CURRENT_TIMESTAMP__INT,CURRENT_TIMESTAMP__YYYY,CURRENT_TIMESTAMP__MM,CURRENT_TIMESTAMP__DD,AE_LAB_MAP_TS,AE_LAB_MAP_TS_RAW,AE_LAB_MAP_TS_INT,AE_LAB_MAP_TS_YYYY,AE_LAB_MAP_TS_MM) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', [
        $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->realText(),
          $faker->date(),
          $faker->realText(),
          $faker->date(),
          $faker->randomDigit(),
          $faker->randomDigit(),
          $faker->realText(),
          $faker->realText(),
          $faker->date(),
          $faker->date(),
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
          $faker->realText(),
          $faker->realText(),
          $faker->randomDigit(),
          $faker->realText(),
          $faker->randomDigit(),
          $faker->realText(),
          $faker->randomDigit(),
          $faker->randomDigit(),
          $faker->randomDigit(),
          $faker->randomDigit(),
          $faker->randomDigit(),
          $faker->realText(),
          $faker->randomDigit(),
          $faker->randomDigit(),
          $faker->randomDigit(),
        ]);
    }

  }
}
