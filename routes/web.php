<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/item',[App\Http\Controllers\ItemController::class,'render']);
Route::post('/storeItem',[App\Http\Controllers\ItemController::class,'store'])->name('storeItem');
Route::post('/updateItem',[App\Http\Controllers\ItemController::class,'update'])->name('updateItem');
Route::get('/item/{id}/delete',[App\Http\Controllers\ItemController::class,'delete'])->name('deleteItem');

Route::get('/item-in',[App\Http\Controllers\ItemInController::class,'render']);
Route::post('/storeItemIn',[\App\Http\Controllers\ItemInController::class,'store'])->name('storeItemIn');
Route::post('updateItemIn',[\App\Http\Controllers\ItemInController::class,'update'])->name('updateItemIn');
Route::get('itemIn/{id}/delete',[App\Http\Controllers\ItemInController::class,'delete'])->name('deleteItemIn');

Route::get('/item-out',[App\Http\Controllers\ItemOutController::class,'render']);
Route::post('/storeItemOut',[App\Http\Controllers\ItemOutController::class,'store'])->name('storeItemOut');
Route::get('updateItemOut',[\App\Http\Controllers\ItemOutController::class,'update'])->name('updateItemOut');
Route::get('itemOut/{id}/delete',[\App\Http\Controllers\ItemOutController::class,'delete'])->name('deleteItemOut');

Route::get('/supplier',[\App\Http\Controllers\SupplierController::class,'render']);
Route::post('/storeSupplier',[App\Http\Controllers\SupplierController::class,'store'])->name('storeSupplier');
Route::get('/updateSupplier', [App\Http\Controllers\SupplierController::class,'update'])->name('updateSupplier');
Route::get('/supplier/{id}/delete',[App\Http\Controllers\SupplierController::class,'delete'])->name('deleteSupplier');

Route::get('/order',[App\Http\Controllers\OrderController::class,'render']);
Route::post('/storeOrder',[App\Http\Controllers\OrderController::class,'store'])->name('storeOrder');
Route::post('/order/update',[App\Http\Controllers\OrderController::class,'update'])->name('order-update');
//Route::get('/item/{id}/delete',[App\Http\Controllers\ItemController::class,'delete'])->name('deleteItem');

// Route::get('/', function () {
//     return view('welcome');
// });
