<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DataScraping;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

Route::get('/ind', [Controller::class, 'index']);

Route::post('/register', [AuthController::class, 'store']);

Route::get('/marcas/{id}', [DataScraping::class, 'marcas']);

Route::get('/thumb/{path}/{img}', [ImageController::class, 'thumb']);