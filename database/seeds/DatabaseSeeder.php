<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

    $this->call('CrdbDemographyTableSeeder');
		$this->call('UsersTableSeeder');
    $this->call('SearchFieldsTableSeeder');
    $this->call('SirdbToxicityTableSeeder');
    $this->call('SirdbDemographyTableSeeder');
    $this->call('RvdbToxicityTableSeeder');
    $this->call('RvdbDemographyTableSeeder');
    $this->call('CrdbToxicityTableSeeder');
	}

}
