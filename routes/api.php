<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TeamApiController;




Route::middleware('auth:sanctum')->group(function () {

    // Route::post('/logout', [UserApiController::class, 'logout']);
    // Route::post('/change-password', [UserApiController::class, 'updatePassword']);
    // Route::get('/profile', [UserApiController::class, 'profile']);
    // Route::put('/profile', [UserApiController::class, 'editProfile']);

});


Route::prefix('admin')->group(function () {

    Route::get('teams/api', [TeamApiController::class, 'index']);
    Route::post('teams/api/store', [TeamApiController::class, 'store']);
    Route::get('teams/api/{id}', [TeamApiController::class, 'show']);
    Route::put('teams/api/{id}', [TeamApiController::class, 'update']);
    Route::delete('teams/api/delete/{id}', [TeamApiController::class, 'destroy']);
    
});
