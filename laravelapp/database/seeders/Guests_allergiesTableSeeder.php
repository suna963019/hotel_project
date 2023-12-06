<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Guests_allergiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 6; $i++) {
            $param = [
                'guest_id' => $i,
                'allergy_id' => $i,
            ];
            DB::table('guests_allergies')->insert($param);
            
        }
    }
}
