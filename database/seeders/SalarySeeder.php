<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SalarySeeder extends Seeder
{
	private static string $tableName = 'salaries';

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		if (DB::table(SalarySeeder::$tableName)->count() > 0) {
			return;
		}
		DB::table(SalarySeeder::$tableName)->insert([
			'salary' => '$0 - $499',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
		]);

		DB::table(SalarySeeder::$tableName)->insert([
			'salary' => '$500 - $749',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
		]);

		DB::table(SalarySeeder::$tableName)->insert([
			'salary' => '$750 - $999',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
		]);

		DB::table(SalarySeeder::$tableName)->insert([
			'salary' => '$1000 - $1499',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
		]);

		DB::table(SalarySeeder::$tableName)->insert([
			'salary' => '$1500 - $1999',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
		]);

		DB::table(SalarySeeder::$tableName)->insert([
			'salary' => '$2000 - $2499',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
		]);

		DB::table(SalarySeeder::$tableName)->insert([
			'salary' => '$2500 - $2999',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
		]);

		DB::table(SalarySeeder::$tableName)->insert([
			'salary' => '$3000 - $4999',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
		]);

		DB::table(SalarySeeder::$tableName)->insert([
			'salary' => '+$5000',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
		]);
	}
}
