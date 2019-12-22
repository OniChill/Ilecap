<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;
use App\mahasiswa;

class MahasiswaSeeder extends Seeder
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
 
    	for($i = 1; $i <= 1000; $i++){
            $jurusan = ['Sistem Kmputer','Ti-dgm','Ti-kab','Ti-mti'];
            
    	      // insert data ke table mahasiswa menggunakan Faker
    		mahasiswa::create([
    			'id' => $faker->numberBetween($min = 11000000, $max = 19000000),
    			'nama' => $faker->name,
    			'password' => $faker->password,
                'alamat' => $faker->address,
                'no_hp' => $faker->phoneNumber,
                'jurusan' => Arr::random($jurusan),
                'email' => $faker->unique()->safeEmail,
                'jenis_kelamin' => $faker->randomElement($array = array ('laki-laki','perempuan'))
    		]);
    }
}
}