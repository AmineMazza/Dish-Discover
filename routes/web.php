<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\ScrapCommandeController;
use App\Http\Controllers\ScrapRestoController;
use App\Http\Controllers\StatistiqueController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DashboardController::class,'index'])->name('dashboard');
Route::get('/statistiques',[StatistiqueController::class,'index'])->name('statistiques.index');
// Route::get('/demandes', [DemandeController::class,'index'])->name('demandes.index');

Route::get('/users', [UsersController::class,'index'])->name('users.index');
Route::get('/user/{id}/edit', [UsersController::class,'edit'])->name('user.edit');
Route::put('/user/{id}', [UsersController::class, 'update'])->name('user.update');
Route::get("/user/{id}/delete", [UsersController::class,'destroy'])->name('user.delete');


Route::get('/offres', [OffreController::class,'index'])->name('offres.index');
Route::get('/offre/create', [OffreController::class,'create'])->name('offre.create');
Route::post('/offre/store', [OffreController::class,'store'])->name('offre.store');
Route::get('/offre/{id}/edit', [offreController::class,'edit'])->name('offre.edit');
Route::put('/offre/{id}', [offreController::class, 'update'])->name('offre.update');
Route::get("/offre/{id}/delete", [OffreController::class,'destroy'])->name('offre.delete');


Route::get('/ScrapCommandes', [ScrapCommandeController::class,'index'])->name('ScrapCommandes.index');
Route::get('/ScrapResto', [ScrapRestoController::class,'index'])->name('ScrapResto.index');





