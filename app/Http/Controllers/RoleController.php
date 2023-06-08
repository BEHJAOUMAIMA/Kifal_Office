<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function index(Role $role)
    {
        $roles = Role::all();
        $permissions = Permission::all();
        $permissions_categories = collect($permissions)->pluck('permission_category')->unique()->values()->prepend('Modules')->toArray();
        $permissions = collect($permissions)->groupBy('permission_module')->map(function ($val, $key) {
            return [
                "module" => $key,
                "data" => $val->toArray()
            ];

        })->values()->toArray();
        $permissions_role = $role->permissions();
        return view('pages.role', [
            'roles' => $roles,
            "permissions" => $permissions,
            "permissions_role" => $permissions_role,
            "permissions_category" => $permissions_categories,
            'role' => $role,
        ]);
    }

    public function create()
    {

    }

    public function store(Request $request, Role $role)
    {
         $validatedData = $request->validate([
            'role_name' => 'required|unique:roles',
            'role_category' => 'required',
            'permissions' => 'array'
        ], [
            'role_name.required' => 'Veuillez entrer un rôle valide !',
            'role_category.required' => 'Veuillez sélectionner une catégorie pour le rôle !'
        ]);

        $role = Role::create([
            'role_name' => $validatedData['role_name'],
            'role_category' => $validatedData['role_category']
        ]);

        $permissions = $request->input('permissions', []);
        foreach ($permissions as $permissionId) {
            DB::table('permission_role')->insert([
                'role_id' => $role->id,
                'permission_id' => $permissionId
            ]);
        }

        return redirect()->back()->with('success', 'Le rôle a été ajouté avec succès !');

    }

    public function edit(Role $role)
    {

    }

    public function update(Request $request, Role $role)
    {
        
    }

    public function destroy(Role $role)
    {
        
    }
}
