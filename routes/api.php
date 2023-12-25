<?php

use App\Http\Controllers\Api\ScrapResto_APIController;
use App\Http\Controllers\Api\Users_APIController;
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

// Creer un ScrapResto :
Route::post('/ScrapResto/create', [ScrapResto_APIController::class,'create']);


// Pour recuperer la liste des produits :
Route::get('/users',[Users_APIController::class,"index"])->name("users");


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
