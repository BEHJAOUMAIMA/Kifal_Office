<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    public function create()
    {
        return view('roles.create');
    }

    public function store(Request $request)
    {
        // Validate Data form
        $validatedData = $request->validate([
            'role_name' => 'required|unique:roles',
        ],[
            'role_name.required'=>'Veuiller Entrer un Role Valide !!',
        ]);

        // Create new Role
        Role::create($validatedData);

        // Redirect with success msg
        return redirect()->route('roles.index')->with('success', 'Le rôle a été créé avec succès.');
    }

    public function edit(Role $role)
    {
        return view('roles.edit', compact('role'));
    }

    public function update(Request $request, Role $role)
    {
         // Validate Data form
         $validatedData = $request->validate([
            'role_name' => 'required|unique:roles',
        ],[
            'role_name.required'=>'Veuiller Entrer un Role Valide !!',
        ]);

        // Update Role
        $role->update($validatedData);

        // Redirect with success msg
        return redirect()->route('roles.index')->with('success', 'Le rôle a été mis à jour avec succès.');
    }

    public function destroy(Role $role)
    {
        // delete Role
        $role->delete();

        // Redirect with success msg
        return redirect()->route('roles.index')->with('success', 'Le rôle a été supprimé avec succès.');
    }
}
