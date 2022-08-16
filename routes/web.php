<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeroisController;

Route::get('/', [HeroisController::class, 'listarHerois']);