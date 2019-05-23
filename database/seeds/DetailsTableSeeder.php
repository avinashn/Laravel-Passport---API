<?php

use Illuminate\Database\Seeder;

class DetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
	    
	    for($i = 0; $i < 250; $i++) {
	        App\Detail::create([
	            'name' => $faker->name,
	            'email' => $faker->email,
	            'email_verified_at' => now(),
	        	'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
	        	'remember_token' => Str::random(10),
	        ]);
	    }
    }
}
