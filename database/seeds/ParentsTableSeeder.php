<?php

use Illuminate\Database\Seeder;

class ParentsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory(App\Parents::class, 10)->create();
	}
}
