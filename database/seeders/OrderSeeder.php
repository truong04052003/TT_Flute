<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'id' =>1,
                'total' => 300000,
                'date_at' => '2022-12-25',
                'date_ship' => '2022-12-27',
                'note' =>'giao hàng sau 17h00',
                'status' =>0,
                'customer_id' => 1,
            ],
        ]);
    }
}
