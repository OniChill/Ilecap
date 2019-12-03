<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //memilih data faker indonesia
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 5; $i++){
 
    	      // insert data ke table dosen menggunakan Faker
    		DB::table('dosen')->insert([
    			'nama' => $faker->name,
    			'password' => $faker->password,
                'alamat' => $faker->address,
                'no_hp' => $faker->phoneNumber
    		]);
 
    	}
    }
}
