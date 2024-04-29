<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConatctController;
use App\Http\Controllers\AccueilPortfolioController;


route::get("/",[AccueilPortfolioController::class,'index']);

// route de contact
Route::post('/ContactMOI',[ConatctController::class,'store']);
