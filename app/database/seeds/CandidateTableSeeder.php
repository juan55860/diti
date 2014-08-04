<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

use diti\Entities\User;
use diti\Entities\Candidate;

class CandidateTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 80) as $index)
		{
			$full_name = $faker->name;

			$user=User::create([
				'full_name' => $full_name,
				'email'     => $faker->email,
				'password'  => \Hash::make('123456'),
				'type'		=> 'candidate'
			]);

			Candidate::create([
				'id'          => $user ->id,
				'website_url' => $faker->url,
				'description' => $faker->text(200),
				'job_type'	  => $faker->randomElement(['full','partial','freelance']),
				'category_id' => $faker->randomElement([1,2,3]),
				'available'   => true,
				'slug'		  => \Str::slug($full_name) 
			]);
		}
	}
}