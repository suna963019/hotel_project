<?php

namespace Database\Seeders;

use App\Models\Reserve;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReserveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i < 6; $i++) { 
            $param=[
                'user_id'=>$i,
                'course_id'=>$i,
                'number'=>2,
                'datetime'=>fake()->dateTimeBetween('1day', '1month')->format('Y-m-d H:i'),
            ];
            Reserve::create($param);
        }
    }
}
