<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Foods_allergiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $param = [
        'allergy_id' => '1',
         'food_id'=>'1',
       ];
       DB::table('foods_allergies')->insert($param);

       $param = [
        'allergy_id' => '2',
         'food_id'=>'2',
       ];
       DB::table('foods_allergies')->insert($param);
       $param = [
        'allergy_id' => '3',
         'food_id'=>'3',
       ];
       DB::table('foods_allergies')->insert($param);
       $param = [
        'allergy_id' => '4',
         'food_id'=>'4',
       ];
       DB::table('foods_allergies')->insert($param);
       $param = [
        'allergy_id' => '5',
         'food_id'=>'5',
       ];
       DB::table('foods_allergies')->insert($param);
       





        //
    }
}
