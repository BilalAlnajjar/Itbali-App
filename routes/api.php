<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductsVendor;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ProductsControllern;
use App\Http\Controllers\Api\SlidController;

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

Route::apiResource('product', ProductsControllern::class)->names([
    'index' => 'api.product.index',
    'store' => 'api.product.store',
    'update' => 'api.product.update',
    'destroy' => 'api.product.destroy',
    'show' => 'api.product.show',
]);



Route::apiResource('datauser' , UserController::class);

Route::apiResource('products-vendor', ProductsVendor::class)->names([
    'index' => 'api.products_vendor.index',
    'store' => 'api.products_vendor.store',
    'update' => 'api.products_vendor.update',
    'destroy' => 'api.products_vendor.destroy',
]);

Route::post('order', [OrderController::class , 'store'])->name('api.order.store');
Route::get('order/{id}', [OrderController::class , 'index'])->name('api.order.index');
Route::apiResource('order', OrderController::class)->except(['store','index'])->names([
    'update' => 'api.order.update',
    'destroy' => 'api.order.destroy',
    'show' => 'api.order.show',
]);

Route::get('slids', [SlidController::class,'index'])->name('api.slids.index');

Route::post('login',[LoginController::class,'login'])->name('api.login');

Route::apiResource('user',UserController::class)->except('index')->names([
    'store' => 'api.user.store',
    'show' => 'api.user.show',
    'update' => 'api.user.update',
]);
