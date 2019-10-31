<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => "Peter",
	        'lastname' => "Pauco",
	        'email' => "peterpauco1@gmail.com",
	        'password' => bcrypt('secret'),
	        'age' => 30
        ]);
    }
}
