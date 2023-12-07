<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AllergiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'name' => '鶏卵',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('allergies')->insert($param);

        $param = [
            'name' => '牛乳',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('allergies')->insert($param);

        $param = [
            'name' => '小麦',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('allergies')->insert($param);

        $param = [
            'name' => '木の実',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('allergies')->insert($param);

        $param = [
            'name' => 'その他',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('allergies')->insert($param);
    }
}
