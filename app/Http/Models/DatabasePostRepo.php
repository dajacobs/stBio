<?php

class DataBasePostRepo implements PostRepoInterface {
	/**
	 * Get Posts
	 */
	public function getPopular(){
		return ['post1', 'post2', 'post3'];
	}
}