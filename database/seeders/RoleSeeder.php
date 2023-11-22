<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
    

       $role = Role::create(['name' => 'Admin']);
       $role->givePermissionTo('Permission-view');
       $role->givePermissionTo('Permissions-view');
       $role->givePermissionTo('Departments-View');
       $role->givePermissionTo('Roles-View');
       $role->givePermissionTo('Users-View');
       $role->givePermissionTo('AllContent_View');
       $role->givePermissionTo('Documents_ViewAll');
     
     



       //    $permission = Permission::create(['name' => 'edit articles']);
      
    }
}
