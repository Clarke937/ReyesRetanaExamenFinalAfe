<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Edgar',
                'email' => 'eretana60@gmail.com',
                'password' => 'Ed12345'
            ],
            [
                'id' => 2,
                'name' => 'Nicole',
                'email' => 'nicole@gmail.com',
                'password' => 'Nicole12345'
            ]
        ]);
    }
}
