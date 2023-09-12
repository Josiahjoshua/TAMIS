<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
 {
        DB::table('role')->insert([

            //Admin
            [
                'id' => Hash::make('1'),
                'name' => 'admin',


            ],

             //StoreKeeper
             [
                'id' => Hash::make('2'),
                'name' => 'storekeeper',


             ],

              //UserDepartment
            [
                'id' => Hash::make('3'),
                'name' => 'userdepartment',


            ],


             //StockChecker
            [
                'id' => Hash::make('4'),
                'name' => 'stockchecker',


            ],

          //Estate
          [
            'id' => Hash::make('5'),
            'name' => 'estate',


        ],
          //Department
          [
            'id' => Hash::make('6'),
            'name' => 'department',


        ],
         // user

          [
            'id' => Hash::make('7'),
            'name' => 'user',


        ],








        ]);
    }
}



