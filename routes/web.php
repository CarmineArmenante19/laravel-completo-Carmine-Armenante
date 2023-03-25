<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;

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

Route::get('/',[Mycontroller::class, 'homepage'])->name('welcome');

Route::get('/prodotti',[Mycontroller::class, 'prodotti'])->name('prodotti');

Route::get('/prodotti/dettaglio/{name}',[Mycontroller::class, 'dettaglioProdotti'])->name('dettagliop');

Route::get('/chi-siamo',[Mycontroller::class, 'chiSiamo'])->name('chi-siamo');

Route::get('/chi-siamo/dettaglio-chisiamo/{name}',[Mycontroller::class, 'dettaglioChisiamo'])->name('dettaglio-chisiamo');