<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(IdeaSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(TierSeeder::class);
        $this->call(DonationSeeder::class);
    }
}
