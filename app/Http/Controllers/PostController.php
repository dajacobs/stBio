<?php

use Illuminate\Http\Request;
use Illuminate\Http\Environment as ViewFactory;
class PostController extends Controller {

	protected $request;
	protected $posts;
	protected $views;

	/**
     * Post Controller Instance Construction
	 */
	public function _construct(Request $request, 
							   PostRepoInterface $posts,
							   ViewFactory $views){
		$this->posts = $posts;
		$this->request = $request; 
		$this->views = $views;
	}

	/**
	 * Show Post
	 */
	public function showPosts(){
		$posts = $this->posts->getPopular();
		return $this->views->make('hello', compact('posts'));
	}

}