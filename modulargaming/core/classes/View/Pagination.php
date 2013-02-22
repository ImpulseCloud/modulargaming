<?php defined('SYSPATH') OR die('No direct script access.');

class View_Pagination {

	// Paginate object.
	public $paginate;

	public function items()
	{
		$items = array();

		// Numbers.
		for ($i = 1; $i <= $this->paginate->pages(); $i++)
		{
			$items[] = array(
				'name' => $i,
				'current' => ($i === $this->paginate->current_page),
				'url' => $this->paginate->url($i)
			);
		}

		return $items;
	}

}
