<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'id' => 1,
            'nombre' => 'Jugo de naranja',
            'descripcion' => 'Jugo',
            'precio_unitario' => '10',
            'existencia' => '10000',
            'garantia' => '2 semanas',
            'seller_id' => 1 
            ],
            [
            'id' => 2,
            'nombre' => 'Sandía',
            'descripcion' => 'Fruta',
            'precio_unitario' => '5',
            'existencia' => '100',
            'garantia' => '3 dias',
            'seller_id' => 2
            ],
            [
            'id' => 3,
            'nombre' => 'Cebolla',
            'descripcion' => 'Verdura',
            'precio_unitario' => '10',
            'existencia' => '700',
            'garantia' => '3 dias',
            'seller_id' => 3
            ],
            [
            'id' => 4,
            'nombre' => 'Almendras',
            'descripcion' => 'Semillas',
            'precio_unitario' => '2',
            'existencia' => '5000',
            'garantia' => '1 mes',
            'seller_id' => 4
            ],
        ]);
    }
}