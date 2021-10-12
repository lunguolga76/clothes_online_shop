<?php

use App\Http\Controllers\api\ProductsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
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



//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::post('/email-check', ['uses' => EmailCheckApiController::class]);


Route::get('/api/products', [BlogController::class, '@read']);

//Route::group(['prefix' => '/api'], function () {
//    Route::group(['prefix' => '/products'], function () {
//        Route::get('/',[ProductsController::class, 'readProduct']);
//    });
//});


//https://localhost:8080/api/products/8523
