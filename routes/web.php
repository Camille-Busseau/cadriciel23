<?php

// appelle le contrôleur relié
use App\Http\Controllers\Exercice1Controller;
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
// Route pour l'accueil, à l'arrivée sur le site
Route::get('/', [Exercice1Controller::class, 'index']);

// Route vers le portfolio
Route::get('/portfolio', [Exercice1Controller::class, 'portfolio']);

// Route vers les informations
Route::get('/about', [Exercice1Controller::class, 'about']);

// Route vers le formulaire de contact
Route::get('/contact', [Exercice1Controller::class, 'contact']);
Route::post('/contact', [Exercice1Controller::class, 'formContact']);




