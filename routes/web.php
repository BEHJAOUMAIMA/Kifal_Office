<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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




Route::get('/Utilisateurs/informations', function () {
    return view('pages/users/showUser');
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


Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/Acceuil', [DashboardController::class, 'getDashboard'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/role/permissions/{role}', [PermissionController::class, 'index'])
            ->where('role', '[0-9]+')
            ->name('permissions');
    Route::post('/roles/{role}/update-permissions', [PermissionController::class, 'updateRolePermissions'])
             ->name('roles.updatePermissions');
    Route::get('/roles', [RoleController::class, 'index'])
            ->where('role', '[0-9]+')
            ->name('roles');
    Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');
    Route::get('/myProfile/{user}', [ProfileController::class, 'displayProfile'])->name('myProfile');
    Route::get('/myAccount/{user}',  [ProfileController::class, 'displayAccount'])->name('myAccount');
    Route::post('/myAccount/edit/{user}',  [ProfileController::class, 'editProfile'])->name('myAccount.edit');
    Route::post('/change-password', [ProfileController::class, 'changePassword'])->name('change.password');
    Route::post('/delete-account', [ProfileController::class, 'deleteAccount'])->name('delete.account');


});

Route::middleware(['auth:sanctum', 'admin'])->group(function (){
    Route::get('/utilisateurs', [UserController::class, 'index'])->name('users.display');
    Route::post('/add/utilisateur', [UserController::class, 'addNewUser'])->name('user.add');
    Route::get('/utilisateurs/informations/{user}', [UserController::class, 'showUser'])->name('user.show');
    Route::post('/utilisateur/{user}', [UserController::class, 'updateUser'])->name('user.update');

});
