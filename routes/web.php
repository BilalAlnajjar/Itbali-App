<?php

use App\Models\App;
use App\Models\Soical;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SlidController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SoicalController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SlidAppController;
use App\Http\Controllers\SlidWebController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MinCategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\VendorProductsController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/',[IndexController::class , 'index'])->name('index');

Route::middleware('auth')->middleware('check:Admin')->group(function(){
    Route::resource('company', CompanyController::class);
    Route::resource('product', ProductController::class);
    Route::get('products/inactive', [ProductController::class,'indexInActive'])->name('product_inactive');
    Route::resource('order', OrderController::class);
    Route::get('orders/pending',[OrderController::class, 'indexPending'])->name('order.pending');
    Route::get('orders/processing',[OrderController::class, 'indexProcessing'])->name('order.processing');
    Route::get('orders/complete',[OrderController::class, 'indexComplete'])->name('order.completed');
    Route::get('orders/declined',[OrderController::class, 'indexDeclined'])->name('order.declined');
    Route::resource('customer', CustomerController::class);
    Route::resource('vendor', VendorController::class);
    Route::resource('main_category', MinCategoryController::class);
    Route::resource('sub_category', SubCategoryController::class);
    Route::resource('slider', SlidController::class);
    Route::resource('slid-app', SlidAppController::class);
    Route::resource('slid-web', SlidWebController::class);
    Route::resource('app', AppController::class);
    Route::resource('testimonial', TestimonialController::class);
    Route::resource('Soical',SoicalController::class);

    Route::get('/products_vendor/{id}', [VendorProductsController::class , 'index'])->name('products-vendor.index');
    Route::get('/products_vendor/create/{id}', [VendorProductsController::class , 'create'])->name('products-vendor.create');
    Route::get('/products_vendor/edit/{id}', [VendorProductsController::class , 'edit'])->name('products-vendor.edit');
    Route::put('/products_vendor/update/{id}', [VendorProductsController::class , 'update'])->name('products-vendor.update');
    Route::put('/products_vendor/{id}', [VendorProductsController::class , 'store'])->name('products-vendor.store');
    Route::delete('/products_vendor/{id}', [VendorProductsController::class , 'destroy'])->name('products-vendor.destroy');

});

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->middleware('auth')->middleware('check:Admin')->name('dashboard');

Route::get('storage/{file}', function($file){
    return response()->file(storage_path('app/public/'.$file));
})->where('file','.*');

Route::get('/linkstorage', function (){
    Artisan::call('storage:link');
});
