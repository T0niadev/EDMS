<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\User;
use App\Models\Foldera;
use App\Models\Folderb;
use App\Models\Folderc;
use App\Models\Folderd;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{   

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function department()
    {
        
       
        $departments = Department::orderBy('created_at', 'asc')->get();
        return view('admin.departments.index', compact('departments'));

    }
    public function departmentadd()
    {
        return view('admin.departments.add');
    }
    public function updatedepartment(Request $request, Department $department)
    {
        $department->update([
                "name"  => $request->name,
            
            ]); 
        return back()->with([
            "success" => "Detail updated succesfully"
        ]);  
        
    }
    public function departmentstore(Request $request)
    {

        $request->validate([
            "name" => 'required',
        ]);

        Department::create([
            "name"  => $request->name,
        ]);

        
        return redirect('admin/departments')->with([
            "success" => "Department Added Succesfully"
        ]);
    }
    public function roles()
    { 

        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.roles.index', compact('roles', 'permissions'));


    }
    public function rolestore(Request $request)
    {

        $request->validate([
            "name" => 'required',
        ]);
        if($request->permission){
            Role::create([
                "name"  => $request->name,
            ]);
            $role->givePermissionTo($request->permission);
        }
        Role::create([
                "name"  => $request->name,
            ]);

        
        return redirect('admin/roles')->with([
            "success" => "Role Created Succesfully"
        ]);
    }
    public function roleedit(Role $role)
    { 

      
        $permissions = Permission::all();
        return view('admin.roles.edit', compact('role', 'permissions'));
      





    }
    public function updaterole(Request $request, Role $role)
    {
       
        $role->update([
            "name" => $request->name,
 
        ]);
     
        return back()->with([
            "success" => "Role updated succesfully"
        ]);
        
    }
    public function assignpermission(Request $request, Role $role)
    {
        

        if($role->hasPermissionTo($request->permission))  {
            return back()->with([
                "error" => "Permission already exist"
            ]);
        }    
        $role->givePermissionTo($request->permission);
        return back()->with('success','Permission added');
    
            

        
    }

    public function revokepermission(Request $request, Role $role, Permission $permission)
    {
        

        if($role->hasPermissionTo($permission))  {
            $role->revokePermissionTo($permission);
            return back()->with('success','Permission revoked');
        }    
        return back()->with('error','Permission not revoked');
    
            

        
    }



    public function permissions()
    {
        
        $permissions = Permission::all();
        return view('admin.permissions.index', compact('permissions'));

    }
    public function permissionstore(Request $request)
    {

        $request->validate([
            "name" => 'required',
        ]);

        Permission::create([
            "name"  => $request->name,
        ]);

        
        return redirect('admin/permissions')->with([
            "success" => "Permission Added Succesfully"
        ]);
    }
    public function updatepermission(Request $request, Permission $permission)
    {
       
        $permission->update([
            "name" => $request->name,
 
        ]);
     
        return back()->with([
            "success" => "Permission updated succesfully"
        ]);
        
    }



    public function users()
    {
        $users = User::all();
        $roles = Role::all();
        $deps = Department::orderBy('created_at', 'asc')->get();
        return view('admin.users.index', compact('users', 'roles', 'deps'));
    }
    public function useredit(User $user)
    { 
        $roles = Role::all();
        $deps = Department::orderBy('created_at', 'asc')->get();
        return view('admin.users.edit', compact('user', 'roles', 'deps'));
    }
    public function userstore(Request $request)
    {
        
        $request->validate([
            "name" => 'required',
        ]);

        User::create([
            "name"  => $request->name,
            "email"  => $request->email,
            "department"  => $request->department,
            'password' => Hash::make($request->get('password'))
        ]);

        
        return redirect('admin/users')->with([
            "success" => "User Created Succesfully"
        ]);
    }
    public function updateuser(Request $request, User $user)
    {
       
        $hasPassword=$request->get('password');
        $user->update(
            $request->merge([
                'email' => $request->get('email'),
                "department"  => $request->get('department'),
                'password' => Hash::make($request->get('password')),
            ])->except([$hasPassword ? '' : 'password'])
        );
     
        return back()->with([
            "success" => "User detail updated succesfully"
        ]);
        
    }
    public function assignrole(Request $request, User $user)
    {
        

        if($user->hasRole($request->role))  {
            return back()->with([
                "error" => "Role already exist"
            ]);
        }    
        $user->assignRole($request->role);
        return back()->with('success','Role assigned');
    
            

        
    }
    public function revokerole(Request $request, User $user, Role $role)
    {
        

        if($user->hasRole($role))  {
            $user->removeRole($role);
            return back()->with('success','Role removed');
        }    
        return back()->with('error','Role not revoked');
    
            

        
    }  

}
