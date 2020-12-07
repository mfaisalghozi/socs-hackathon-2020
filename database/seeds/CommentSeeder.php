<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Comment')->insert([
            ['ideaid' => 3,'username'=>'Mike', 'comment'=> 'Wah menarik sekali nih, jadi mau ikut support.'],
            ['ideaid' => 3,'username'=>'John', 'comment'=> 'Bisa kepikiran ide seperti ini dari mana sih?'],
            ['ideaid' => 4,'username'=>'Maya', 'comment'=> 'Sudah lama aku ingin terbang, langsung support ah.'],
            ['ideaid' => 4,'username'=>'Lili', 'comment'=> 'Wih, pasti berguna sekali nih untuk pergi ke mana-mana.'],
        ]);
    }
}
