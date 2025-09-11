<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GitController;


Route::get('/',[GitController::class, "index"])->name("index");