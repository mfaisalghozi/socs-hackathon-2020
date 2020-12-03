<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tier')->insert([
            ['ideaid' => '3', 'tiername'=>'Dora-rinho', 'tierdescription'=>'Support kami dengan minimal Rp500.000 dan dapatkan 1 Pintu Kemana Saja setelah selesai produksi.', 'tierprice'=>'500000'],
            ['ideaid' => '3', 'tiername'=>'El Matadora', 'tierdescription'=>'Support kami dengan minimal Rp1.000.000 dan dapatkan 2 Pintu Kemana Saja beserta 1 Goodie Bag setelah selesai produksi.', 'tierprice'=>'1000000'],
            ['ideaid' => '3', 'tiername'=>'Dora-nikov', 'tierdescription'=>'Support kami dengan minimal Rp2.000.000 dan dapatkan 3 Pintu Kemana Saja beserta 5 Goodie Bag setelah selesai produksi.', 'tierprice'=>'2000000'],
            ['ideaid' => '3', 'tiername'=>'Dora-med III', 'tierdescription'=>'Support kami dengan minimal Rp4.000.000 dan dapatkan 5 Pintu Kemana Saja beserta 10 Goodie Bag dan taruh nama anda di tempat spesial dalam buku panduan kami setelah selesai produksi.', 'tierprice'=>'4000000'],
            ['ideaid' => '4', 'tiername'=>'Dora-the-Kid', 'tierdescription'=>'Support kami dengan minimal Rp1.000.000 dan dapatkan 1 Baling-Baling Bambu setelah selesai produksi.', 'tierprice'=>'1000000'],
            ['ideaid' => '4', 'tiername'=>'Wang Dora', 'tierdescription'=>'Support kami dengan minimal Rp2.000.000 dan dapatkan 2 Baling-Baling Bambu beserta 1 Goodie Bag setelah selesai produksi.', 'tierprice'=>'2000000'],
            ['ideaid' => '4', 'tiername'=>'Doraemon', 'tierdescription'=>'Support kami dengan minimal Rp5.000.000 dan dapatkan 4 Baling-Baling Bambu beserta 10 Goodie Bag setelah selesai produksi.', 'tierprice'=>'5000000'],
        ]);
    }
}
