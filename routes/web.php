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
Route::get("/conditions", [AcceptTermsController::class, "see_conditions"]);
Route::get("/about-us", [AboutController::class, "index"]);

// User Login Authentication
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

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
});

// Route::get('/filter-pets', function () {
//     return view('pets.filter-pets');
// });
/*
Route::get('/profile', function () {
return view('pets.profile');
});

Route::get('/dashboard', function () {
return view('pets.dashboard');
});

Route::get('/users', function () {
return view('pets.users');
});

Route::get('/pets', function () {
return view('pets.pets');
});

Route::get('/settings', function () {
return view('pets.settings');
});

Route::get('/favourites', function () {
return view('pets.favourites');
});

Route::get('/login', function () {
return view('pets.login');
});

Route::get('/register', function () {
return view('pets.register');
});

Route::get('/about-us', function () {
return view('pets.about-us');
});
Route::get('/contact', function () {
return view('pets.contact');
});
Route::get('/how-it-works', function () {
return view('pets.how-it-works');
});

Route::get('/contact-owner', function () {
return view('pets.contact-owner');
});
Route::get('/pet-profile', function () {
return view('pets.pet-profile');
});
 */
require __DIR__ . '/auth.php';
