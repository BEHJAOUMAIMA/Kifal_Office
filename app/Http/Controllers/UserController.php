<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $users = User::with('role')->get();
        $roles = $roles = Role::all();
        return view('pages.users.allUsers', ['users' => $users, 'roles'=>$roles]);
    }



    public function addNewUser(Request $request)
    {
        $request->validate([
            'lastname'=>'required|string',
            'firstname'=>'required|string',
            'email'=>'required|email',
            'mobile'=>'required',
            'role_id'=>'required',
            'password'=>'required|string|confirmed|min:8',
        ],[
            'lastname.required' => 'Entrez un nom d\'utilisateur valide !',
            'firstname.required' => 'Entrez un prénom d\'utilisateur valide !',
            'email.required' => 'Entrez une adresse mail valide !',
            'mobile.required' => 'Entrez une numéro de téléphone valide!',
            'role_id.required' => 'Veuillez séléctionner un Rôle pour l\'utilisateur !',
            'password.required' => 'Veuiller entrer un mot de passe valide !',
        ]);

        $isAdmin = ($request->role_id == 1) ? 1 : 0;

        $newUser= User::create([
            'lastname'=>$request->lastname,
            'firstname'=>$request->firstname,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'password'=>Hash::make($request->password),
            'is_admin' => $isAdmin,
            'role_id'=>$request->role_id,

        ]);
        return redirect()->back()->with('success', 'L\'Utilisateur a été ajouté avec succès !');;
    }

    public function showUser(User $user)
    {
        $roles = $roles = Role::all();
        return view('pages.users.showUser',['user'=>$user, 'roles'=>$roles]);
    }


    public function updateUser(Request $request, User $user)
    {
        $roles = $roles = Role::all();
        $request->validate([
            'lastname' => 'required|string',
            'firstname' => 'required|string',
            'email' => 'required|email',
            'mobile' => 'required',
            'role_id' => 'required',
            'password' => 'nullable|string|confirmed|min:8',
        ], [
            'lastname.required' => 'Entrez un nom d\'utilisateur valide !',
            'firstname.required' => 'Entrez un prénom d\'utilisateur valide !',
            'email.required' => 'Entrez une adresse mail valide !',
            'mobile.required' => 'Entrez un numéro de téléphone valide!',
            'role_id.required' => 'Veuillez sélectionner un rôle pour l\'utilisateur !',
            'password.min' => 'Le mot de passe doit comporter au moins 8 caractères !',
            'password.confirmed' => 'Le mot de passe de confirmation ne correspond pas !',
        ]);
        
        $isAdmin = ($request->role_id == 1) ? 1 : 0;
        
        $user->update([
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'is_admin' => $isAdmin,
            'role_id' => $request->role_id,
            'password' => ($request->password) ? Hash::make($request->password) : $user->password,
        ]);
    
        return redirect()->back()->with('success', 'Les informations de l\'utilisateur ont été mises à jour avec succès !');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
