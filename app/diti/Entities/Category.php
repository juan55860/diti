<?php

namespace diti\Entities;

class Category extends \Eloquent {
	protected $fillable = [];

	public function candidates()
	{
		return $this->hasMany('diti\Entities\Candidate');
	}
	
}