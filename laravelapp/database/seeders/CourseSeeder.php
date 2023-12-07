<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'name' => 'スタンダードコース',
            'price' => 20000,
        ];
        DB::table('courses')->insert($param);

        $param = [
            'name' => 'ハーフコース',
            'price' => 15000,
        ];
        DB::table('courses')->insert($param);

        $param = [
            'name' => 'スペシャルコース',
            'price' => 30000,
        ];
        DB::table('courses')->insert($param);

        $param = [
            'name' => 'シェフのおまかせコース',
            'price' => 40000,
        ];
        DB::table('courses')->insert($param);

        $param = [
            'name' => '季節のコース',
            'price' => 250000,
        ];
        DB::table('courses')->insert($param);
    }
}
