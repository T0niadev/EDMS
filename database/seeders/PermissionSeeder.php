<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
    
       $permission = Permission::create(['name' => 'Permission-view']);
       $permission = Permission::create(['name' => 'Permissions-view']);
       $permission = Permission::create(['name' => 'Departments-View']);
       $permission = Permission::create(['name' => 'Regular-User']);
       $permission = Permission::create(['name' => 'Roles-View']);
       $permission = Permission::create(['name' => 'Users-View']);
       $permission = Permission::create(['name' => 'AllContent_View']);
       $permission = Permission::create(['name' => 'Documents_ViewAll']);
      
    }
}
