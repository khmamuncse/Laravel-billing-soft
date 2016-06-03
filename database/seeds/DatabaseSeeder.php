<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Student as Student;
class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');
		$this->call('StudentTableSeeder');

		$this->command->info('Student table seeded!');
	}

}

class StudentTableSeeder extends Seeder {

	public function run()
	{
		DB::table('students')->delete();

		Student::create(
			['name' => 'kamrul haider mamun', 'roll' => 26,],
		    ['name' => ' mamun', 'roll' => 27,],
		['name' => 'kamrul haider mamun', 'roll' => 28,]);
	}

}
