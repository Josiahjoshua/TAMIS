<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

// class RolesTableSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      */
//     public function run(): void
//  {
//         DB::table('role')->insert([

//             //Admin
//             [
//                 'id' => Hash::make('1'),
//                 'full_name' => 'admin',


//             ],

//              //StoreKeeper
//              [
//                 'id' => Hash::make('2'),
//                 'full_name' => 'storekeeper',


//              ],

//               //UserDepartment
//             [
//                 'id' => Hash::make('3'),
//                 'full_name' => 'userdepartment',


//             ],


//              //StockChecker
//             [
//                 'id' => Hash::make('4'),
//                 'full_name' => 'stockchecker',


//             ],

//           //Estate
//           [
//             'id' => Hash::make('5'),
//             'full_name' => 'estate',


//         ],
//           //Department
//           [
//             'id' => Hash::make('6'),
//             'full_name' => 'department',


//         ],
//          // user

//           [
//             'id' => Hash::make('7'),
//             'full_name' => 'user',


//         ],









//         ]);
//     }
// }
class RolesTableSeeder extends Seeder
{
    public function run()
{
    DB::table('role')->insert([
        ['role_name' => 'admin', 'id' => 1],
        ['role_name' => 'storekeeper', 'id' => 2],
        ['role_name' => 'stockchecker', 'id' => 3],
        ['role_name' => 'estate', 'id' => 4],
        ['role_name' => 'userdepartment', 'id' => 5],
        ['role_name' => 'department', 'id' => 6],
        ['role_name' => 'user', 'id' => 7],
        // Add other roles here
    ]);
    
}
}


