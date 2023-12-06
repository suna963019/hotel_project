<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class GuestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//通常処理
        $param = [
            'course_id' => '1',
            'name' => '山川　冬雄',
            'detail' => '結婚記念日 来店12/10',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('guests')->insert($param);

        $param = [
            'course_id' => '3',
            'name' => '鈴木　春子',
            'detail' => '車いす　広いお席へ',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('guests')->insert($param);

        $param = [
            'course_id' => '4',
            'name' => '田中　夏美',
            'detail' => 'お得意様',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('guests')->insert($param);

        $param = [
            'course_id' => '2',
            'name' => '細野　秋人',
            'detail' => '遅刻多い',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('guests')->insert($param);

        $param = [
            'course_id' => '5',
            'name' => '松山　朝子',
            'detail' => '誕生日ケーキ希望',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('guests')->insert($param);

        //Faker利用の場合
        // $faker = \Faker\Factory::create('ja_JP');
        // for ($i = 1; $i < 6; $i++){
        //     $param = [
        //         'course_id' => $i,//数値範囲指定箇所
        //         'name' => $faker->name(),
        //         'detail' => $faker->realText(),//備考欄
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ];
        //     DB::table('guests')->insert($param);}

    }
}
