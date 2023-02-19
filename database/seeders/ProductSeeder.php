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
                'name' => 'Sáo D5',
                'price' => 5000000,
                'quantity' => 126,
                'category_id' => 1,
                'supplier_id' =>1,
                'description' => 'Sáo Rê cao hay còn được gọi là sáo D5 thuộc trong những dòng sáo trung cao, mang âm sắc thánh thót, thích hợp chơi được nhiều thể loại nhạc, đặc biệt là nhạc chèo, nhạc trữ tình,  quê hương, bolero tới nhạc trẻ, pop, rock hay Edm',
                'image' => 'https://vn-live-01.slatic.net/p/9adcf26e27973cf67a305728abaf8176.jpg',
                'created_at' => '2022-12-17 04:02:10',
            ],
         
          
        
          
       
          
      
      

        ]);
    }
}
