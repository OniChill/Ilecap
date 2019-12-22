<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\dosen;

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
 
    	for($i = 1; $i <= 100; $i++){
 
    	      // insert data ke table dosen menggunakan Faker
              dosen::create([
    			'id' => $faker->numberBetween($min = 6280000, $max = 6289999),
    			'nama' => $faker->name,
    			'password' => $faker->password,
                'alamat' => $faker->address,
                'no_hp' => $faker->phoneNumber
    		]);

    	}
    }
}
