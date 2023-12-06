<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Reserves_guestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 6; $i++) {
            $param = [
                'reserve_id' => $i,
                'guest_id' => $i,
            ];
            DB::table('reserves_guests')->insert($param);
        }
    }
}
