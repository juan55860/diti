<?php

namespace diti\Repositories;

use diti\Entities\Candidate;

class CandidateRepo extends BaseRepository
{
	public function getModel()
	{
		return new Candidate;
	}
}