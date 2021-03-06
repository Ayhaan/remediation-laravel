<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\VoitureController;
use App\Models\Voiture;
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

Route::get('/', [FrontController::class, 'home'])->name('home');

Route::get('/admin/voiture', [VoitureController::class, 'index'])->name('voiture.index');
