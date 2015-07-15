<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToxicityTableForRvdb extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

    Config::set('database.default', 'rvdb');

		Schema::create('toxicity', function(Blueprint $table)
		{
      $table->string('Subject');
      $table->string('CTCAE4_LLT_NM');
      $table->string('CTCAE4_LLT_NM_STD');
      $table->string('AE_VERBATIM_TRM_TXT');
      $table->string('AE_SEV_GD');
      $table->string('AE_SEV_GD_STD');
      $table->Date('AE_ONSET_DT_DD');
      $table->string('AE_ONSET_DT_RAW');
      $table->Date('AE_ONSET_DT_INT');
      $table->integer('AE_ONSET_DT_YYYY');
      $table->integer('AE_ONSET_DT_MM');
      $table->string('PT_TOX_HOSP_IND');
      $table->string('PT_TOX_HOSP_IND_STD');
      $table->date('AE_RESOLV_ALDT');
      $table->date('AE_RESOLV_ALDT_STD');
      $table->string('MEDDRA_SOC_TRM_NM');
      $table->string('MEDDRA_SOC_TRM_NM_STD');
      $table->string('CTCAE4_M_LLTMEDDRACD');
      $table->string('CTCAE4_M_LLTMEDDRACD_STD');
      $table->string('CTC_AE_ATTR_SCALE');
      $table->string('CTC_AE_ATTR_SCALE_STD');
      $table->string('AE_EXPECT_IND');
      $table->string('AE_EXPECT_IND_STD');
      $table->string('AE_SERIOUS_IND');
      $table->string('AE_SERIOUS_IND_STD');
      $table->string('AE_ONGOING_EVENT_IND');
      $table->string('AE_ONGOING_EVENT_IND_STD');
      $table->string('AE_OUTCOME_TXT_TP');
      $table->string('AE_OUTCOME_TXT_TP_STD');
      $table->string('RSCH_COMMENTS_TXT');
      $table->string('SAE_DESC_RSN_TXT');
      $table->string('SAE_DESC_RSN_TXT_STD');
      $table->string('DOSE_LIMT_TOX_IND');
      $table->string('DOSE_LIMT_TOX_IND_STD');
      $table->string('GRADE_DESC');
      $table->string('GRADE_DESC_STD');
      $table->integer('CATEGORY_ID');
      $table->string('CATEGORY_ID_RAW');
      $table->integer('CURRENT_TIMESTAMP_');
      $table->string('CURRENT_TIMESTAMP__RAW');
      $table->integer('CURRENT_TIMESTAMP__INT');
      $table->integer('CURRENT_TIMESTAMP__YYYY');
      $table->integer('CURRENT_TIMESTAMP__MM');
      $table->integer('CURRENT_TIMESTAMP__DD');
      $table->integer('AE_LAB_MAP_TS');
      $table->string('AE_LAB_MAP_TS_RAW');
      $table->integer('AE_LAB_MAP_TS_INT');
      $table->integer('AE_LAB_MAP_TS_YYYY');
      $table->integer('AE_LAB_MAP_TS_MM');
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
		Schema::drop('toxicity');
    Config::set('database.default', 'biostats');
	}

}
