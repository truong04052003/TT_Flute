<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\DB;
>>>>>>> 11d9bbf8840514c064fd962db8586376723c37f6

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        //
=======
        DB::table('categories')->insert([
            [
                'name' => 'Quần',
            ],
            [
                'name' => 'Áo',
            ],
            [
                'name' => 'Mũ',
            ],
            [
                'name' => 'Dép',
            ],
            [
                'name' => 'Giày',
            ],
            [
                'name' => 'Phụ kiện',
            ],
        ]);
>>>>>>> 11d9bbf8840514c064fd962db8586376723c37f6
    }
}
