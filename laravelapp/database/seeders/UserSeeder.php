<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param=[
            'name'=>'admin',
            'tel'=>'tel',
            'email'=>'admin@mail',
            'password'=>Hash::make('password'),
        ];
        User::created($param);
        User::factory()->count(4)->create();
    }
}
