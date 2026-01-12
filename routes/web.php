<?php

use App\Http\Controllers\PortoflioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PortoflioController::class, 'index']);
