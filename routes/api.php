<?php

use App\Http\Controllers\Api\ScrapCommande_APIController;
use App\Http\Controllers\Api\ScrapResto_APIController;
use App\Http\Controllers\Api\Users_APIController;
use App\Http\Controllers\Api\ScrapingTestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
// Pour recuperer la liste des ScrapRestos :
    Route::get('/ScrapResto',[ScrapResto_APIController::class,"index"])->name("ScrapResto");
// Pour Creer un ScrapResto :
    Route::post('/ScrapResto/create', [ScrapResto_APIController::class,'create']);
// Pour Modifier un ScrapResto :
    Route::put('/ScrapResto/edit/{id}', [ScrapResto_APIController::class,'update']);
// Pour Modifier un ScrapResto :
    Route::delete('/ScrapResto/{id}', [ScrapResto_APIController::class,'delete']);


// Pour recuperer la liste des ScrapRestos :
    Route::get('/ScrapCommande',[ScrapCommande_APIController::class,"index"])->name("ScrapResto");
// Pour Creer un ScrapResto :
    Route::post('/ScrapCommande/create', [ScrapCommande_APIController::class,'create']);
// Pour Modifier un ScrapResto :
    Route::put('/ScrapCommande/edit/{id}', [ScrapCommande_APIController::class,'update']);
// Pour Modifier un ScrapResto :
    Route::delete('/ScrapCommande/{id}', [ScrapCommande_APIController::class,'delete']);


// Pour recuperer la liste des produits :
Route::get('/users',[Users_APIController::class,"index"])->name("users");


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
