<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        return view('permissions.index', compact('permissions'));
    }

    public function create()
    {
        return view('permissions.create');
    }

    public function store(Request $request)
    {
        // Validate Data
        $validatedData = $request->validate([
            'permission_name' => 'required|unique:permissions',
        ]);

        // Create new permission
        Permission::create($validatedData);

        // Redirecte with success msg
        return redirect()->route('permissions.index')->with('success', 'La permission a été créée avec succès.');
    }

    public function edit(Permission $permission)
    {
        return view('permissions.edit', compact('permission'));

    }

    public function update(Request $request, Permission $permission)
    {
         // Validate Data
         $validatedData = $request->validate([
            'permission_name' => 'required|unique:permissions,permission_name,' . $permission->id,

        ]);

        // UP Permission
        $permission->update($validatedData);

        // Redirect with success msg
        return redirect()->route('permissions.index')->with('success', 'La permission a été mise à jour avec succès.');
    }

    public function destroy(Permission $permission)
    {
        // delete permission
        $permission->delete();

        // Redirect with success msg
        return redirect()->route('permissions.index')->with('success', 'La permission a été supprimée avec succès.');
    }
}
