<?php

use App\Http\Controllers\api\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailCheckApiController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/email-check', ['uses' => EmailCheckApiController::class]);

Route::group(['prefix' => '/api'], function () {
    Route::group(['prefix' => '/products'], function () {
        Route::get('/{id}', ['uses' => ProductsController::class . '@readProduct']);
    });
//        Route::get('/info', ['uses' => UserInfoController::class . '@index']);
//    Route::post('/info', ['uses' => UserInfoController::class . '@storedInfo']);
//    Route::get('/info/stored', ['uses' => UserInfoController::class . '@stored']);

});


//https://localhost:8080/api/products/8523
