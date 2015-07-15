<?php

use Illuminate\Database\Seeder;

class SearchFieldsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('search_fields')->delete();
        \App\SearchField::create([
            'display_name' => 'Subject ID',
            'text_id' => 'subjectId',
            'field_type' => 'text',
            'category' => 'Demography'
        ]);

        \App\SearchField::create([
            'display_name' => 'Subject Name',
            'text_id' => 'subjectName',
            'field_type' => 'text',
            'category' => 'Demography'
        ]);

        \App\SearchField::create([
            'display_name' => 'Subject Birth Date',
            'text_id' => 'subjectBirthDate',
            'field_type' => 'datepicker',
            'filters' => '{"equals":"Equals","before":"Before","after":"After", "between":"Between"}',
            'category' => 'Demography'
        ]);

        \App\SearchField::create([
            'display_name' => 'Subject Ethnicity',
            'text_id' => 'subjectEthnicity',
            'field_type' => 'select',
            'select_values' => '{"hisp":"Hispanic or Latino","unknown":"Unknown","notHisp":"Not Hispanic or Latino", "notReported":"NotReported"}',
            'category' => 'Demography'
        ]);

        \App\SearchField::create([
            'display_name' => 'Subject Race',
            'text_id' => 'subjectRace',
            'field_type' => 'select',
            'select_values' => '{"amerInd":"American Indian or Alaska Native","white":"White","asian":"Asian","unknown":"Unknown","black":"Black or African American","notReported":"Not Reported","nativeHawaiian":"Native Hawaiian or Other Pacific Islander"}',
            'category' => 'Demography'
        ]);

        \App\SearchField::create([
            'display_name' => 'Subject Gender',
            'text_id' => 'subjectGender',
            'field_type' => 'select',
            'select_values' => '{"female":"Female","male":"Male","notReported":"Not Reported"}',
            'category' => 'Demography'
        ]);

        \App\SearchField::create([
            'display_name' => 'Event Onset Date',
            'text_id' => 'eventOnsetDate',
            'field_type' => 'datepicker',
            'filters' => '{"equals":"Equals","before":"Before","after":"After", "between":"Between"}',
            'category' => 'Event'
        ]);
    }

}
