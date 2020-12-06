<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('donation')->insert([
            ['userid' => 2, 'donationamount'=>'30000', 'donationTypeID'=>'2'],
            ['userid' => 2, 'donationamount'=>'70000', 'donationTypeID'=>'1'],
            ['userid' => 4, 'donationamount'=>'30000', 'donationTypeID'=>'1'],
            ['userid' => 7, 'donationamount'=>'300000', 'donationTypeID'=>'2'],
            ['userid' => 8, 'donationamount'=>'500000', 'donationTypeID'=>'1'],
            ['userid' => 9, 'donationamount'=>'3000000', 'donationTypeID'=>'1'],

           
        ]);
    }
}
