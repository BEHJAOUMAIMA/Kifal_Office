<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PermissionController extends Controller
{
    public function index(Role $role)
    {
        $role = Role::find($role->id);
        $permissions = Permission::all();
        $permissions_categories = collect($permissions)->pluck('permission_category')->unique()->values()->prepend('Modules')->toArray();
        $permissions = collect($permissions)->groupBy('permission_module')->map(function ($val, $key) {
            return [
                "module" => $key,
                "data" => $val->toArray()
            ];

        })->values()->toArray();
        $permissions_role = $role->permissions();

        return view('pages.permission', [
            "permissions" => $permissions,
            "permissions_role" => $permissions_role,
            "permissions_category" => $permissions_categories,
            'role' => $role,
        ]);
    }

    public function create()
    {
        return view('permissions.create');
    }

    public function store(Request $request)
    {
        // // Validate Data
        // $validatedData = $request->validate([
        //     'permission_name' => 'required|unique:permissions',
        // ], [
        //         //Display a error msg
        //         'permission_name.required' => 'Veuiller Entrer une permission valide !',
        //     ]);

        // // Create new permission
        // Permission::create($validatedData);

        // // Redirecte with success msg
        // return redirect()->route('permissions.index')->with('success', 'La permission a été créée avec succès.');
    }

    public function edit(Permission $permission)
    {
        // return view('permissions.edit', compact('permission'));

    }

    public function updateRolePermissions(Request $request, Role $role)
    {
        $permissions = $request->get('permissions', []);
       
        $query = DB::table('permission_role')
            ->where('role_id', '=', $role->id)
            ->delete();

        foreach ($permissions as $permissionId) {
            $query2= DB::table('permission_role')->insert([
                'role_id' => $role->id,
                'permission_id' => $permissionId
            ]);
        }

        return redirect()->back()->with('success', 'Les permissions du rôle ont été mises à jour avec succès.');
    }

    public function destroy(Permission $permission)
    {
        // delete permission
        $permission->delete();

        // Redirect with success msg
        return redirect()->route('permissions.index')->with('success', 'La permission a été supprimée avec succès.');
    }
}