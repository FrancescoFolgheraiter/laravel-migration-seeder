<?php

use Illuminate\Support\Facades\Route;
//importazione controller Train
use App\Http\Controllers\Guest\TrainController;

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

Route::get('/',[TrainController::class,'index'])->name('train.index');

Route::get('/{date}',[TrainController::class,'showDate'])->name('train.show');

// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)
