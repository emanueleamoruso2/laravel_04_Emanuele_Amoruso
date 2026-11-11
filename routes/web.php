<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/',[PublicController::class,'Homepage'])->name('Homepage');
Route::get('/Products',[PublicController::class,'prodotti'])->name('Products');
Route::get('/Details/product/${name}',[PublicController::class,'productdetail'])->name('ProductsDetails');