<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Trần Văn Trường';
        $user->email = 'truong@gmail.com';
        $user->password = Hash::make('123456');
        $user->address = 'Quảng Trị';
        $user->image = 'truong.png';
        $user->phone = '0343689757';
        $user->gender = 'Nam';
        $user->group_id = '1';
        $user->save();
    }
}
