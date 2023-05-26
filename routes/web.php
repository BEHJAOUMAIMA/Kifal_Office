<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');



Route::get('/Utilisateurs', function () {
    return view('pages/users/allUsers');
});
Route::get('/Utilisateurs/informations', function () {
    return view('pages/users/showUser');
});
Route::get('/myProfile', function () {
    return view('pages/userProfile');
});
Route::get('/myAccount', function () {
    return view('pages/userAccount');
});
Route::get('/EditUser', function () {
    return view('pages/users/editUser');
});
Route::get('/Voitures', function () {
    return view('pages/cars/cars');
});
Route::get('/voitures/informations', function () {
    return view('pages/cars/carInformation');
});
Route::get('/voiture/Modifier', function () {
    return view('pages/cars/carEdit');
});
Route::get('/Catalogue', function () {
    return view('pages/catalogue');
});



// Route::middleware('guest')->get('/', function () {
//     // Vérifier si l'utilisateur est déjà authentifié
//     if (auth()->check()) {
//         // Rediriger l'utilisateur vers une autre page (par exemple, le tableau de bord)
//         return redirect('/Acceuil');
//     }

//     // Afficher la vue de la page de connexion
//     return view('pages.login');
// });
Route::middleware(['auth'])->group(function () {
    Route::get('/Acceuil', [DashboardController::class, 'getDashboard'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

