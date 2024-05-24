<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Middleware\CheckUserRole;
use Illuminate\Support\Facades\Route;

Route::get('/home',[HomeController::class,'home'])->name('home')->middleware('auth');
Route::get('/', [indexController::class, 'index'])->name('index');
Route::get('/about',[HomeController::class,'about'])->name('about')->middleware('auth');
Route::get('/contact',[HomeController::class,'contact'])->name('contact')->middleware('auth');
Route::get('/manage',[AdminController::class,'index'])->name('admin.index')->middleware(CheckUserRole::class . ":admin");
Route::get('/manage/search/product',[AdminController::class,'search'])->name('admin.search.product')->middleware(CheckUserRole::class . ":admin");
Route::get('/image/{id}', [AdminController::class, 'getImage'])->name('get.image')->middleware(CheckUserRole::class . ":admin");
Route::get('/manage/create/product',[AdminController::class,'create_product'])->name('admin.create.product')->middleware(CheckUserRole::class . ":admin");
Route::post('/manage/store/product',[AdminController::class,'store_product'])->name('admin.store.product')->middleware(CheckUserRole::class . ":admin");
Route::get('/manage/view/update/product/{id}',[AdminController::class,'update_view_product'])->name('admin.view.update.product')->middleware(CheckUserRole::class . ":admin");
Route::put('/manage/update/product/{id}',[AdminController::class,'update_product'])->name('admin.update.product')->middleware(CheckUserRole::class . ":admin");
Route::delete('/manage/delete/product/{id}', [AdminController::class,'destroy_product'])->name('admin.destroy.product')->middleware(CheckUserRole::class . ":admin");

Route::get('/cart',[CartController::class,'index'])->name('cart.index')->middleware('auth');
Route::post('/cart/addtocart/{fragrance_id}',[CartController::class,'addToCart'])->name('cart.add')->middleware('auth');
Route::delete('/cart/destroy/{id}',[CartController::class,'destroyItem'])->name('cart.destroy.item')->middleware('auth');

Route::post('/placeOrder',[CartController::class,'placeOrder'])->name('placeorder')->middleware('auth');
Route::get('/orders',[OrderController::class, 'index'])->name('order.index')->middleware('auth');
Route::put('/order/{order}/status',[OrderController::class, 'updateStatus'])->name('order.status.update');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
