<?php defined('SYSPATH') OR die('No direct script access.');

class View_Forum_Post_Delete extends View_Base {

	public $post;

	public function title()
	{
		return 'Deleting post #'.$this->post->id;
	}

	public function post()
	{
		$post = $this->post->as_array();
		return $post;
	}


}

