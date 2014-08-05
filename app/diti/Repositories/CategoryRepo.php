<?php

namespace diti\Repositories;

use diti\Entities\Category;

class CategoryRepo 
{
	public function find($id)
	{
		return Category::find($id);
	}
}