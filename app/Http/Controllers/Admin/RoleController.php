<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\GroupName;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    // =========================== Role ==============================

    //All Role
    public function AllRole()
    {
        $roles = Role::all();
        return view('admin.pages.roles.role.all_role', compact('roles'));
    }

    //Store Role
    public function StoreRole(Request $request)
    {
        Role::create(['name' => $request->name]);

        return redirect()->route('all.role')->with('success', 'Role Inserted Successfully');
    }

    //Update Role
    public function UpdateRole(Request $request)
    {
        $id = $request->id;

        Role::find($id)->update(['name' => $request->name]);

        return redirect()->route('all.role')->with('success', 'Role Update Successfully');
    }

    //Delete Role
    public function DeleteRole($id)
    {
        Role::find($id)->delete();

        return redirect()->route('all.role');
    }

    // =============================== Permission =====================================

    //All Permission
    public function AllPermission()
    {
        $permissions = Permission::orderBy('group_name', 'ASC')->get();
        // $groups = GroupName::orderBy('group_name', 'ASC')->latest()->get();

        return view('admin.pages.roles.all_permission', compact('permissions'));
    }

    //Store Permission
    public function StorePermission(Request $request)
    {
        Permission::create([
            'name' => $request->name,
            'guard_name' => 'admin',
            'group_name' => $request->group_name,
        ]);

        return redirect()->route('all.permission')->with('success', 'Permission Inserted Successfully');
    }

    //Edit Permission
    public function EditPermission($id)
    {
        $permissions = Permission::find($id);
        $groups = GroupName::orderBy('group_name', 'ASC')->latest()->get();

        return view('admin.pages.roles.edit_permission', compact('permissions', 'groups'));
    }

    //Update Permission
    public function UpdatePermission(Request $request)
    {
        $id = $request->id;

        Permission::find($id)->update([
            'name' => $request->name,
            'group_name' => $request->group_name,
        ]);

        return redirect()->route('all.permission')->with('success', 'Permission Update Successfully');
    }

    //Delete Permission
    public function DeletePermission($id)
    {
        Permission::find($id)->delete();

        return redirect()->route('all.permission')->with('success', 'Permission Delete Successfully');
    }

    // ================================= Role In Permission ====================================

    //All Roles Permission
    public function AllRolesPermission()
    {
        $roles = Role::all();
        return view('admin.pages.roles.rolesetup.all_roles_permission', compact('roles'));
    }

    //Add Roles Permission
    public function AddRolesPermission()
    {
        $roles = Role::all();
        $permissions = Permission::all();

        $permission_groups = Admin::getpermissionGroups();

        return view('admin.pages.roles.rolesetup.add_rolepermission', compact('roles', 'permissions', 'permission_groups'));
    }

    //Role Permission Store
    public function RolePermissionStore(Request $request)
    {
        $data = array();
        $permissions = $request->permission;

        foreach ($permissions as $key => $item) {
            $data['role_id'] = $request->role_id;
            $data['permission_id'] = $item;

            DB::table('role_has_permissions')->insert($data);
        }

        return redirect()->back()->with('success', 'Role Permission Inserted Successfully');
    }

    //AdminRolesEdit
    public function AdminRolesEdit($id)
    {

        $role = Role::findOrFail($id);
        $permissions = Permission::all();

        $permission_groups = Admin::getpermissionGroups();

        return view('admin.pages.roles.rolesetup.edit_roles_permission', compact('role', 'permissions', 'permission_groups'));
    }

    //AdminRolesUpdate
    public function AdminRolesUpdate(Request $request, $id)
    {

        $role = Role::findOrFail($id);
        $permissions = $request->permission;

        if (!empty($permissions)) {
            $role->syncPermissions($permissions);
        }

        return redirect()->route('all.roles.permission')->with('success', 'Role Permission Update Successfully');

    }

    //AdminRolesDelete
    public function AdminRolesDelete($id)
    {
        $role = Role::findOrFail($id);
        if (!is_null($role)) {
            $role->delete();
        }

        return redirect()->back()->with('success', 'Role Permission Delete Successfully');

    }

    // ============================ Admin Permission ========================

    //Admin Permission
    public function AdminPermission()
    {
        $users = Admin::get();
        $roles = Role::latest()->get();

        return view('admin.pages.roles.admin.admin_permission', compact('users', 'roles'));
    }

    public function StoreAdminPermission(Request $request)
    {
        $user = new Admin();
        $user->name = $request->name;
        $user->company_name = $request->company_name;
        $user->designation = $request->designation;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->status = $request->status;

        $user->mail_status = $request->mail_status;

        $user->save();

        if ($request->roles) {
            $user->assignRole($request->roles);
        }

        return redirect()->route('all.admin.permission')->with('success', 'Admin Created Successfully');

    }

    //Edit Admin Permission
    public function EditAdminPermission($id)
    {
        $users = Admin::findOrFail($id);
        $roles = Role::all();

        return view('admin.pages.roles.admin.edit_admin_permission', compact('users', 'roles'));
    }

    //UpdateAdmin
    public function UpdateAdmin(Request $request, $id)
    {

        $user = Admin::findOrFail($id);
        $user->name = $request->name;
        $user->company_name = $request->company_name;
        $user->designation = $request->designation;
        $user->address = $request->address;
        $user->phone = $request->phone;

        $user->email = $request->email;
        $user->status = $request->status;
        $user->mail_status = $request->mail_status;

        $user->save();

        $user->roles()->detach();

        if ($request->roles) {
            $user->assignRole($request->roles);
        }

        return redirect()->route('all.admin.permission')->with('success', 'Data Update Successfully');

    }

    //DeleteAdmin
    public function DeleteAdmin($id)
    {
        $user = Admin::findOrFail($id);
        if (!is_null($user)) {
            $user->delete();
        }

        return redirect()->route('all.admin.permission')->with('success', 'Data Delete Successfully');

    }

}
