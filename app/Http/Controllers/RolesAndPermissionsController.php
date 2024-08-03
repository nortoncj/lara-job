<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsController extends Controller
{
    //

    public function addPermissions(Request $request) {
        $permissions = [
        'Plans',
        'CSV Export',

    ];

    foreach ($permissions as $permission) {
        Permission::create(['name' => $permission]);
    }

    }

    public function createRole() {
        $permissions = Permission::all();
        $users = User::select('name', 'id')->get();
        return view('RolesAndPermissions.create', compact('permissions', 'users'));
    }

    public function create(Request $request) {
        $role = Role::create(['name' => $request->name]);

        foreach ($request-> permission as $permission) {
            $role->givePermissionTo($permission);
        }

        foreach ($request->users as $user) {
            $user = User::find($user);
            $user->assignRole($role->name);
        }

        return redirect('admin.roles-all');
    }

    public function editRole($id)
    {
        $role = Role::where('id', $id)
            ->with('permissions', 'users')
            ->first();
        $permissions = Permission::all();
        $users = User::select('name', 'id')->get();

        return view('RolesAndPermissions.EditRole', compact('role', 'permissions', 'users'));
    }

    public function updateRole(Request $request)
    {
        $role = Role::where('id', $request->id)->first();
        $role->name = $request->name;
        $role->update();

        $role->syncPermissions($request->permission);

        DB::table('model_has_roles')->where('role_id', $request->id)->delete();

        foreach ($request->users as $user) {
            $user = User::find($user);
            $user->assignRole($role->name);
        }

        return redirect('admin.roles-all');
    }

    public function delete($id)
    {
        Role::where('id', $id)->delete();
        return redirect('admin.roles-all');
    }
}
