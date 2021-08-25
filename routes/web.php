<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\EmailCheckApiController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ManufacturerController;
{


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 
Route::get('/', function() {
    return view('front.homepage');
});
Route::get('/blog', [BlogController::class, 'index']);

Route::get('/blog/article/{articleId}', [BlogController::class, 'show'])->name('article.show');

Route::get('/contacts',[ContactUsController::class, 'contactUs'])->name('contactUs.show');

Route::post('/store-contact-info',[ContactUsController::class, 'storeContactInfo'])->name('contactUs.store');
Route::get('/manufacturer', [\App\Http\Controllers\ManufacturerController::class, 'create'])->name('manufacturer.store');


/*})->middleware('response.log');

Route::group(['prefix' => '/user'], function () {
    Route::get('/info', ['uses' => UserInfoController::class . '@index']);
    Route::post('/info', ['uses' => UserInfoController::class . '@storedInfo']);
    Route::get('/info/stored', ['uses' => UserInfoController::class . '@stored']);

});
*/


}