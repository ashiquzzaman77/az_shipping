<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TeamApiController;
use App\Http\Controllers\User\Api\UserApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::post('/register', [UserApiController::class, 'register']);
// Route::post('/login', [UserApiController::class, 'login']);
// Route::post('/reset-password/{token}', [UserApiController::class, 'reset']);
// Route::post('/forgot-password', [UserApiController::class, 'forgotPassword']);



Route::middleware('auth:sanctum')->group(function () {

    // Route::post('/logout', [UserApiController::class, 'logout']);
    // Route::post('/change-password', [UserApiController::class, 'updatePassword']);
    // Route::get('/profile', [UserApiController::class, 'profile']);
    // Route::put('/profile', [UserApiController::class, 'editProfile']);

});


Route::prefix('admin')->group(function () {

    Route::get('teams/api', [TeamApiController::class, 'index']);
    Route::post('teams/api', [TeamApiController::class, 'store']);
    Route::get('teams/api/{id}', [TeamApiController::class, 'show']);
    Route::put('teams/api/{id}', [TeamApiController::class, 'update']);
    Route::delete('teams/api/{id}', [TeamApiController::class, 'destroy']);
    
});
