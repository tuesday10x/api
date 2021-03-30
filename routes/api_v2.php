<?php

use App\Http\API\v2\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->group(function(){
    Route::get('/admins', [UserController::class, 'getAdmins']);
    Route::get('/members', [UserController::class, 'getMembers']);
    Route::get('/clowns', [UserController::class, 'getClowns']);
});

