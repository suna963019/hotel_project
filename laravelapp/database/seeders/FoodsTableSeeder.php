<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert 5 dummy records into the 'foods' table
        DB::table('foods')->insert([
            ['course_id' => 1, 'name' => 'トリュフサラダ', 'type' => 'Salad'],
            ['course_id' => 2, 'name' => '牛フィレ肉のポワレ', 'type' => 'Main'],
            ['course_id' => 3, 'name' => 'セロリラヴのヴルーテ', 'type' => 'Soup'],
            ['course_id' => 4, 'name' => '国産牛サーロインをトリュフ風味で', 'type' => 'Main'],
            ['course_id' => 5, 'name' => 'パン バター', 'type' => 'pain']
        ]);
    }
}
