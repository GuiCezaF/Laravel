<?php

use App\Http\Controllers\Api\CitiesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/cities', [CitiesController::class, 'index']);

Route::get('/', function () {
    return response()->json([
        'Success' => true
    ]);
});
