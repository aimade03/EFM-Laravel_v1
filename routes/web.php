<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterielController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VoitureController;
use App\Http\Controllers\SalarieController;
use App\Http\Controllers\EleveController;

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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/materiels',[MaterielController::class,'AfficherListeMateriels']);
// Route::post('/materiels',[MaterielController::class,'AjouterMateriels']);
// Route::delete('/materiels/{materiel}',[MaterielController::class,'SupprimerMateriels']);
// Route::get('/employes',[EmployeController::class,'AfficherListEmployes']);
// Route::get('/employes/{employe}',[EmployeController::class,'consulterDetails']);
// Route::get('/affectation/create/{employe}',[EmployeController::class,'create']);
// Route::post('/affectation/{employe}',[EmployeController::class,'store']);
// Route::delete('/affectation/{employe}/{materiel}',[EmployeController::class,'destroy']);
// Route::get('/login',[AuthController::class,'loginPage']);
// Route::get('/register',[AuthController::class,'signPage']);
// Route::post('/register',[AuthController::class,'register']);
// Route::post('/login',[AuthController::class,'login']);
// Route::get('/logout',[AuthController::class,'logout']);
// Route::get('/voitures',[VoitureController::class,'AfficherListVoiture']);
// Route::delete('/voitures/{voiture}',[VoitureController::class,'SupprimerVoiture']);
// Route::get('/salaries',[SalarieController::class,'AfficherSalarie']);
// Route::get('/salaries/{salarie}',[SalarieController::class,'consulterDetails']);
Route::resource('eleves', EleveController::class);
