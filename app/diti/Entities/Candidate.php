<?php

namespace diti\Entities;

class Candidate extends \Eloquent {
	protected $fillable = [];

	public function user()
	{
		return $this->hasOne('diti\Entities\User','id','id');
	}

	public function category()
	{
		return $this->belongsTo('diti\Entities\Category');
	}
}