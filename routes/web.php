<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/Homepage',[PublicController::class,'Homepage'])->name('Homepage');
Route::get('/Prodotti',[PublicController::class,'prodotti'])->name('Prodotti');
Route::get('/Dettaglio/prodotto/${nomeprodotto}',[PublicController::class,'productdetail'])->name('DettaglioProdotto');