<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('pages.login');
    }

    public function login(StoreUserRequest $request)
    {
        try {
            $credentials = [
                'email' => $request->get('email'),
                'password' => $request->get('password')
            ];
            if (Auth::attempt($credentials)) {
                $user = Auth::user();

                $token = $user->createToken('auth_token')->plainTextToken;
                return redirect('/Acceuil')->with(['token' => $token]);
            } else {
                return back()->withErrors([
                    'email' => 'Les informations d\'identification fournies ne sont pas valides.',
                ]);
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }

    }

    public function logout(Request $request)
    {
        Auth::user()->tokens()->delete();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Vous avez été déconnecté avec succès. Revenez bientôt !');

    }
}
