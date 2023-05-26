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

        // $credentials = $request->only('email', 'password');
        // $user = User::where('email', $request->email)->first();
        // if (!$user || !($request->password == $user->password)) {
        //     return back()->withErrors([
        //         'email' => 'Les informations d\'identification fournies ne sont pas valides.',
        //     ]);
        // } else {
        //     // $userAuth = Auth::user();
        //     $token = $user->createToken('auth_token')->plainTextToken;
        //     // $userAuth->setRememberToken($token);
        //     return redirect('/Acceuil')->with(['token' => $token]);
        // }
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


        // return back()->withErrors([
        //     'email' => 'Les informations d\'identification fournies ne sont pas valides.',
        // ]);
    }

    public function logout(Request $request)
    {
        // $user = Auth::user();
        // dd($user);
        // if ($user) {
        //     $user->currentAccessToken()->delete();
        // }

        // // Invalidating session cookies
        // Http::withHeaders([
        //     'X-XSRF-TOKEN' => csrf_token(),
        // ])->post(config('sanctum.stateful') ? '/sanctum/csrf-cookie' : '/csrf-cookie');

        // return redirect('/')->with('success', 'Déconnexion réussie');
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');

    }
}
