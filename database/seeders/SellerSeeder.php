<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sellers')->insert([
            [
                'id' => 1,
                'dui' => '789456851',
                'direccion' => 'Santa Tecla',
                'nit' => '123456789',
                'user_id' => 1
            ],
            [
                'id' => 2,
                'dui' => '987654321',
                'direccion' => 'San Salvador',
                'nit' => '321654987',
                'user_id' => 1
            ],
            [
                'id' => 3,
                'dui' => '456123789',
                'direccion' => 'San Benito',
                'nit' => '456789123',
                'user_id' => 1
            ],
            [
                'id' => 4,
                'dui' => '147258369',
                'direccion' => 'Santa Elena',
                'nit' => '963852741',
                'user_id' => 1
            ]
        ]);

    }
}