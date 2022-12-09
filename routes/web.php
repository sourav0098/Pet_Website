<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AcceptTermsController;
use App\Http\Controllers\AddPetController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FindPetController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PetsController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// Routes which needs no authentication
Route::get('/', [HomePageController::class, 'index']);
Route::get("/filter-pets", [FindPetController::class, "findDogs"]);
Route::get("/pet-profile/{id}/{type}", [FindPetController::class, "petProfile"])->name('pet-profile');
Route::get("/conditions", [AcceptTermsController::class, "see_conditions"]);
Route::get("/about-us", [AboutController::class, "index"])->name('about-us');
Route::get("/contact", [ContactController::class, "edit"]);

Route::get('/how-it-works', function () {
    return view('pets.how-it-works');
});


// User Login Authentication
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile/pet-update', [ProfileController::class, 'petUpdate'])->name('profile.pet-update');
    Route::delete('/profile', [ProfileController::class, 'petDelete'])->name('profile.pet-delete');

    Route::get("/settings", [SettingsController::class, "edit"])->name('settings.edit');
    Route::put("/settings", [SettingsController::class, "update"])->name('settings.update');
    Route::delete("/settings", [SettingsController::class, "destroy"])->name('settings.destroy');

    Route::get('/add-pet', [AddPetController::class, "edit"])->name('add-pet.edit');
    Route::post('/add-pet', [AddPetController::class, "store"])->name('add-pet.store');

    Route::get("/logout", [LogoutController::class, "logout"]);
});

// Admin Login Authentication
Route::middleware(['auth', 'auth_admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, "edit"])->name('dashboard.edit');
    
    Route::get('/users', [UsersController::class, "edit"])->name('users.edit');
    Route::patch('/users', [UsersController::class, "update"])->name('users.update');
    Route::delete('/users', [UsersController::class, "destroy"])->name('users.destroy');
    
    Route::get('/pets', [PetsController::class, "edit"])->name('pets.edit');
    Route::patch('/pets', [PetsController::class, "update"])->name('pets.update');
    Route::delete('/pets', [PetsController::class, "destroy"])->name('pets.destroy');
});

// Route::get('/favourites', function () {
//     return view('pets.favourites');
// });


Route::get('/duke', function () { return view('pets.home-page-pets.duke'); })->name('duke');
Route::get('/milo', function () { return view('pets.home-page-pets.milo'); })->name('milo');
Route::get('/rex', function () { return view('pets.home-page-pets.rex'); })->name('rex');
Route::get('/dollar', function () { return view('pets.home-page-pets.dollar'); })->name('dollar');
Route::get('/leo', function () { return view('pets.home-page-pets.leo'); })->name('leo');

Route::get('/pet-profile', function () {
    return view('pets.pet-profile');
});

Route::post('/send-message/{type}', [UsersController::class, "sendEmail"])->name('send-email');
require __DIR__ . '/auth.php';
