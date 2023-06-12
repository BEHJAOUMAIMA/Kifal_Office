<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class ProfileController extends Controller
{
    public function displayProfile(User $user){
        return view('pages.userProfile', ['user'=>$user]);
    }
    public function displayAccount(User $user){
        return view('pages.userAccount', ['user'=>$user]);
    }

    public function editProfile(Request $request, User $user)
    {
        $request->validate([
            'lastname' => 'required',
            'firstname' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
        ], [
            'lastname.required' => 'Entrez un nom d\'utilisateur valide !',
            'firstname.required' => 'Entrez un prénom d\'utilisateur valide !',
            'email.required' => 'Entrez une adresse mail valide !',
            'mobile.required' => 'Entrez un numéro de téléphone valide!',
        ]);

        $user->update([
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'updated_at' => now(),
        ]);
        $message = "Profil mis à jour avec succès !";
        return view('pages.userAccount', compact('user', 'message'));
    }
    public function changePassword(Request $request){
        $user = Auth::user();

        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        if (Hash::check($request->current_password, $user->password)) {
            $user->password = Hash::make($request->new_password);
            $user->save();

            return Redirect::back()->with('success', 'Mot de passe modifié avec succès !');
        } else {
            return Redirect::back()->withErrors(['current_password' => 'Le mot de passe actuel est incorrect.']);
        }
    }

    public function deleteAccount(Request $request)
{
        $user = Auth::user();

        if ($request->has('accountActivation') && $request->accountActivation == true) {
            $user->delete();
            return Redirect::route('login')->with('success1', 'Votre compte a été supprimé avec succès !');
        } else {
            return Redirect::back()->with(['accountActivation', 'Veuillez confirmer la suppression de votre compte.']);
        }
}
}
