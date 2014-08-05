<?php

namespace diti\Repositories;

abstract class BaseRepository 
{		
	protected $model;

	function __construct() {
		$this->model= $this->getModel();
	}

	abstract public function getModel();

	public function find($id)
	{
		return $this->model->find($id);
	}
}