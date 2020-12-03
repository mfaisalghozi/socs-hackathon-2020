<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdeaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('idea')->insert([
            ['userid' => '2', 'categoryid' => '3', 'ideaname' => 'Pintu Kemana Saja', 'ideaimg' => 'pintu.jpg', 'ideadescription'=>'Inilah pintu ajaib yang kalau dibuka bisa membawamu kemana saja.', 'ideatarget'=>'10000000', 'currentearning'=>'100000', 'donatorcount'=>'2', 'ideadeadline'=>'2020-12-12', 'qa'=>'Apakah bisa dipakai untuk pergi ke kamar Shizuka? Tentu saja bisa hehe.'],
            ['userid' => '3', 'categoryid' => '3', 'ideaname' => 'Baling-Baling Bambu', 'ideaimg' => 'baling.jpg', 'ideadescription'=>'Inilah baling-baling bambu yang bisa membuatmu terbang dengan mudah.', 'ideatarget'=>'25000000', 'currentearning'=>'10000000', 'donatorcount'=>'20', 'ideadeadline'=>'2020-12-25', 'qa'=>'Apakah bisa dipakai untuk terbang ke hati Shizuka? Tentu saja bisa hehe.'],

        ]);
    }
}
