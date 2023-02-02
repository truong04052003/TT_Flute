<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Order_DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_detail')->insert([
            [
                'product_id' => 1,
                'order_id' => 1,
                'quantity' => 1,
                'price' => 450000,
            ],
            [
                'product_id' => 2,
                'order_id' => 1,
                'quantity' => 2,
                'price' => 450000,
            ],
            [
                'product_id' => 1,
                'order_id' => 2,                
                'quantity' => 1,
                'price' => 450000,
            ],
            [
                'product_id' => 3,
                'order_id' => 2,
                'quantity' => 5,
                'price' => 450000,
            ],
            [
                'product_id' => 4,
                'order_id' => 3,
                'quantity' => 2,
                'price' => 450000,
            ],
        ]);

    }
}
