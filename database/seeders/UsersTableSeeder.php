<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
 {
        DB::table('user')->insert([

            //Admin
            [
                'full_name' => 'Admin',
                'username' => 'admin',
                'password' =>Hash::make('111'),
                'phone' =>  '0764037344',
                'role_id' => 1, // Specify the role ID here
            ],







        ]);
    }
}



