<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ActividadApiController;

Route::get('/actividades', [ActividadApiController::class, 'index']);