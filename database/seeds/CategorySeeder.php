<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//staff cats
    	
    	DB::table('categories')->insert([
		'name' =>  "President",
		'type' => 'staff',
	]);

	DB::table('categories')->insert([
		'name' => "Vice President",
		'type' => 'staff',
	]);

	DB::table('categories')->insert([
		'name' => "General secretary",
		'type' => 'staff',
	]);

	DB::table('categories')->insert([
		'name' => "Financial Controller",
		'type' => 'staff',
	]);

	DB::table('categories')->insert([
		'name' => "Womens's commissioner",
		'type' => 'staff',
	]);

	DB::table('categories')->insert([
		'name' => "PRO",
		'type' => 'staff',
	]);

	DB::table('categories')->insert([
		'name' => "Pusag president",
		'type' => 'staff',
	]);

	DB::table('categories')->insert([
		'name' => "Pusag secretary",
		'type' => 'staff',
	]);

	//Student cats
	DB::table('categories')->insert([
		'name' => 'WCOM',
		'type' => 'student'
	]);
	
	DB::table('categories')->insert([
		'name' => 'BBS',
		'type' => 'student'
	]);
	
	DB::table('categories')->insert([
		'name' => 'BMS',
		'type' => 'student'
	]);
	
	DB::table('categories')->insert([
		'name' => 'BSC.IT',
		'type' => 'student'
	]);
	
	DB::table('categories')->insert([
		'name' => 'LAW',
		'type' => 'student'
	]);
	
	DB::table('categories')->insert([
		'name' => 'NURSING',
		'type' => 'student'
	]);
    }
}

