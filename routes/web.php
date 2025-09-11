<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GitController;


Route::get('/',[GitController::class, "index"])->name("index");

Route::get('/create',[GitController::class, "create"])->name("create");

Route::post('/store',[GitController::class, "store"])->name("store");

Route::get('/show',[GitController::class, "show"])->name("show");

Route::get('/edit',[GitController::class, "edit"])->name("edit");

Route::put('/update',[GitController::class, "update"])->name("update");

Route::delete('/destroy',[GitController::class, "destroy"])->name("destroy");