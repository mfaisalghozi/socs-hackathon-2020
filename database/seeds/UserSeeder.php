<?php

use Illuminate\Database\Seeder;
// use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        
        DB::table('user')->insert([
            'name' => 'Admin niBos',
            'email' => 'adminnibos@gmail.com',
            'password' => 'admin',
            'phone' => 12345678910,
            'roleid' => 3,
       
        ]);

    	// for($i = 1; $i <= 10; $i++){
        //     DB::table('user')->insert([
        //         'name' => $faker->name,
        //         'email' => $faker->email,
        //         'password' => $faker->password,
        //         'phone' => $faker->numberBetween($min = 621111111111, $max=629999999999),
        //         'roleid' => $faker->numberBetween($min = 1, $max=2),
        //     ]);
        // }
    }
}
