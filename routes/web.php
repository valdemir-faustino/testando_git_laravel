<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GitController;


Route::get('/',[GitController::class, "index"])->name("index");

Route::get('/create',[GitController::class, "create"])->name("create");

Route::post('/store',[GitController::class, "store"])->name("store");

Route::get('/show/{id}',[GitController::class, "show"])->name("show");

Route::get('/edit/{id}',[GitController::class, "edit"])->name("edit");

Route::put('/update/{id}',[GitController::class, "update"])->name("update");

Route::delete('/destroy/{id}',[GitController::class, "destroy"])->name("destroy");