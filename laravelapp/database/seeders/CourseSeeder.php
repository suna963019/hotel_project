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
            'url'=>'img/course1.jpg',
            'price' => 20000,
        ];
        DB::table('courses')->insert($param);

        $param = [
            'name' => 'ハーフコース',
            'url'=>'img/course2.jpg',
            'price' => 15000,
        ];
        DB::table('courses')->insert($param);

        $param = [
            'name' => 'スペシャルコース',
            'url'=>'img/course3.jpg',
            'price' => 30000,
        ];
        DB::table('courses')->insert($param);

        $param = [
            'name' => 'シェフのおまかせコース',
            'url'=>'img/course4.jpg',
            'price' => 40000,
        ];
        DB::table('courses')->insert($param);

        $param = [
            'name' => '季節のコース',
            'url'=>'img/course5.jpg',
            'price' => 25000,
        ];
        DB::table('courses')->insert($param);
    }
}
