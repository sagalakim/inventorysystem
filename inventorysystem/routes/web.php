<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Models\Item;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/stockin', function () {
    $items = Item::all();
    return view('stockin', compact('items'));
})->middleware(['auth', 'verified'])->name('stockinv');

Route::get('/stockout', function () {
    $items = Item::all();
    return view('stockout', compact('items'));
})->middleware(['auth', 'verified'])->name('stockoutv');

Route::get('/purchase-request', function () {
    $items = Item::all();
    return view('purchaserequest', compact('items'));
})->middleware(['auth', 'verified'])->name('purchaser');

Route::middleware('auth')->group(function () {
    Route::post('/item-store', [AdminController::class, 'itemstore'])->name('store.item');
    Route::post('/stock-in', [AdminController::class, 'stockin'])->name('stockin');
    Route::post('/stock-out', [AdminController::class, 'stockout'])->name('stockout');
    Route::post('/store-purchase-request', [AdminController::class, 'purchaserequest'])->name('purchaserequest');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
