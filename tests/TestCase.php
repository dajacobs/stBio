<?php

class TestCase extends Illuminate\Foundation\Testing\TestCase {
	
	/**
	 * Preparation for each test.
	 */
	public function setUp(){
		parent::setUp();
		$this -> prepareForTests();
	}

	/**
	 * Creates the application.
	 *
	 * @return \Illuminate\Foundation\Application
	 */
	public function createApplication(){
		$unitTesting = true;
		$testEnvironment = 'testing';
		$app = require __DIR__.'/../bootstrap/autoload.php';

		$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

		return $app;
	}

	/**
	 * Migrates database and set mailer 
	 * to cause tests to run quickly.
	 */
	private function prepareForTest(){
		Artisan::call('migrate');
		Mail::pretend(true);
	}
}
