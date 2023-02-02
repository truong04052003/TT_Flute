<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Sáo Trúc',
            ],
            [
                'name' => 'Sáo Dọc',
            ],
            [
                'name' => 'Sáo Hmoong',
            ],
            [
                'name' => 'Sáo Dizi',
            ],
            [
                'name' => 'Sáo Bầu',
            ],
            [
                'name' => 'Tiêu',
            ],
        ]);
    }
}
