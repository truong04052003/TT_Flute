<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'name' => 'Áo hoodie nam nữ unisex local brand',
                'price' => 50000,
                'quantity' => 100,
                'manufacture' => 'ncence',
                'category_id' => 1,
                'description' => 'kecdsbwdjn',
                'image' => 'https://vn-live-01.slatic.net/p/9adcf26e27973cf67a305728abaf8176.jpg',
                'created_at' => '2022-12-17 04:02:10',
            ],
        ]);
    }
}
