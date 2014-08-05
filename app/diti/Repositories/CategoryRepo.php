<?php

namespace diti\Repositories;

use diti\Entities\Category;

class CategoryRepo extends BaseRepository
{
	public function getModel()
	{
		return new Category;
	}	
}