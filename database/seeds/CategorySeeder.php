<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Category')->insert([
            ['category' => 'Games'],
            ['category' => 'Books'],
            ['category' => 'Technology'],
            ['category' => 'Arts'],
            ['category' => 'Food & Craft'],
            ['category' => 'Music'],
            ['category' => 'Publishing'],
        ]);
    }
}
