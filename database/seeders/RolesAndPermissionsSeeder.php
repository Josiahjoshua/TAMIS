<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Create roles
         $adminRole = Role::create(['name' => 'admin']);
         $userRole = Role::create(['name' => 'user']);
         $storekeeperRole = Role::create(['name' => 'storekeeper']);
         $stockcheckerRole = Role::create(['name' => 'stockchecker']);
         $estateRole = Role::create(['name' => 'estate']);
         $departmentRole = Role::create(['name' => 'department']);
         $userdepartmentRole = Role::create(['name' => 'userdepartment']);

         // Define permissions
         $manageUsersPermission = Permission::create(['name' => 'manage users']);
         $manageInventoryPermission = Permission::create(['name' => 'manage inventory']);

         // Assign permissions to roles
         $adminRole->givePermissionTo([$manageUsersPermission, $manageInventoryPermission]);
         $storekeeperRole->givePermissionTo([$manageInventoryPermission]);

         // Assign roles to users
         // You can do this when you create a user or in a seeder


    }
}




