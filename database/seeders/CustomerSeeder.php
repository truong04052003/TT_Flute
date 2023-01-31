<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'id' =>1,
                'name' => 'nguyen van a',
                'address' => 'Dakarong',
                'email' => 'nguyenvanA@gmail.com',
                'phone' => '0123456789',
                'password' =>bcrypt('123')
            ],
        ]);
    }
}
