<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\EmailCheckApiController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
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

 
//Route::get('/', 'IndexController::class, index')->name('home');
/*Route::get('/', function() {
    return view('front.homepage');
});
/*Route::get('/category', function() {
    return view('front.category');
});*/
/*Route::get('/category/product/{id}', function() {
    return view('front.product-details');
});*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/section', [SectionController::class, 'index'])->name('index.section');
Route::get('/section{id}', [SectionController::class, 'show'])->name('index.section');
Route::get('/category', [CategoryController::class, 'index'])->name('index.categories');
Route::get('/category/{id}', [CategoryController::class, 'show'])->name('show.category');
Route::get('/product', [ProductController::class, 'index'])->name('index.products');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('show.product');



Route::get('/blog', [BlogController::class, 'index'])->name('bloghome');

Route::get('/blog/article/{id}', [BlogController::class, 'show'])->name('article.show');

Route::get('/contacts',[ContactUsController::class, 'contactUs'])->name('contactUs.show');

Route::post('/store-contact-info',[ContactUsController::class, 'storeContactInfo'])->name('contactUs.store');
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