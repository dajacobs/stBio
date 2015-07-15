<?php

class DemoTest extends PHPUnit_Framework_TestCase {

	public function tearDown(){
		Mockery::close();
	}

	/**
	 * Test PostController@showPosts
	 */
	public function testShowPosts(){
		$mockPosts = Mockery::mock('PostRepoInterface');
		$mockPosts->shouldReceive('getPopular')->once()->andReturn(['popular']);
		$this->app->instance('PostRepoInterface', $mockPosts);
		$reponse = $this->action('GET', 'PostController@showPosts');
		$this->assertTrue($response->isOk());
	}
}