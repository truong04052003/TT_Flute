<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            [
                'name' => 'Sáo Trúc Hoàng Anh',
                'email' => 'ht@gmail.com',
                'address' => '133 Nguyễn Huệ',
                'phone' => '0982448555',
            ],
            [
                'name' => 'Sáo Trúc Mão Mèo',
                'email' => 'maomeo@gmail.com',
                'address' => '133 Nguyễn Huệ',
                'phone' => '0982444555',
            ],
        ]);
    }
}
