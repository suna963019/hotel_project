<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CourseSeeder::class);
        $this->call(Guests_allergiesTableSeeder::class);
        //通常処理＆Faker処理
        $this->call(GuestsTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ReserveSeeder::class);
    }
}
