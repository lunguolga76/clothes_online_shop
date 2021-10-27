<?php

use App\Http\Controllers\InfoController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\EmailCheckApiController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/categories', [CategoryController::class, 'index'])->name('index.categories');

Route::get('/category/{id}', [CategoryController::class, 'show'])->name('show.category');

Route::get('/products', [ProductController::class, 'index'])->name('index.products');

Route::get('/products/{id}', [ProductController::class, 'show'])->name('show.product');

Route::get('/search',[SearchController::class,'index'])->name('search');

//    Route::prefix('api')->group(function () {
//        Route::prefix('products')->group(function () {
//            Route::post('/', function () {
//                // return view('pages/homepage');
//                echo 'bbbbbbbbbbbbbbb';
//            });
//            Route::get('/{id}', function () {
//                echo 'I need pizza id here....';
//            });
//            Route::get('/', function () {
//                echo '[
//        {
//            "id": 0,
//            "username": "string",
//            "firstName": "string",
//            "lastName": "string",
//            "email": "string",
//            "password": "string",
//            "phone": "string",
//            "userStatus": 0
//          },
//          {
//            "id": 12333,
//            "username": "string",
//            "firstName": "string",
//            "lastName": "string",
//            "email": "string",
//            "password": "string",
//            "phone": "string",
//            "userStatus": 0
//          },
//        ]';
//            });
//        });
//    });
Route::get('/articles', [BlogController::class, 'index'])->name('bloghome');

Route::get('/articles/{id}', [BlogController::class, 'show'])->name('article.show');

Route::get('/our/mission',[InfoController::class, 'info'])->name('info.show');

Route::get('/our/contacts',[ContactUsController::class, 'contactUs'])->name('contactUs.show');

Route::post('/our/contacts',[ContactUsController::class, 'storeContactInfo'])->name('contactUs.store');

Route::get('/manufacturer/create', [\App\Http\Controllers\ManufacturerController::class, 'create']);

Route::get('/manufacturer/{id}/view', [\App\Http\Controllers\ManufacturerController::class, 'view']);


/*})->middleware('response.log');

Route::group(['prefix' => '/user'], function () {
    Route::get('/info', ['uses' => UserInfoController::class . '@index']);
    Route::post('/info', ['uses' => UserInfoController::class . '@storedInfo']);
    Route::get('/info/stored', ['uses' => UserInfoController::class . '@stored']);

});
*/
}
