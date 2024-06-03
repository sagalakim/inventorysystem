<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Models\Item;
use App\Models\Stockin;
use App\Models\Stockout;




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
    return view('login');
});

Route::get('/dashboard', function () {
    $items = Item::where('item_type', '=', 'Supply')->orderBy('unit', 'asc')->get();
    return view('admin.inventorycontent',compact('items'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/supplies', function () {
    $items = Item::where('item_type', '=', 'Supply')->orderBy('item_description', 'asc')->get();
    return view('admin.supplies', compact('items'));
})->middleware(['auth', 'verified'])->name('suppl');

Route::get('/equipment', function () {
    $items = Item::where('item_type', '=', 'Equipment')->orderBy('item_description', 'asc')->get();
    return view('admin.equipment', compact('items'));
})->middleware(['auth', 'verified'])->name('equip');

Route::get('/Admin/StockIn', function () {
    $stockins = Stockin::orderBy('po_date', 'desc')->get();
    //return view('stockin', compact('items'));
    return view('admin.inout.stockIn',compact('stockins'));
})->middleware(['auth', 'verified'])->name('stockinv');

Route::get('/Admin/StockIn/Supplies', function () {
    $stockins = Stockin::where('type','Supply')->orderBy('description', 'asc')->get();
    return view('admin.inout.stockInSupply',compact('stockins'));
})->middleware(['auth', 'verified'])->name('stockins');

Route::get('/Admin/StockIn/Equipment', function () {
    $stockins = Stockin::where('type','Equipment')->orderBy('description', 'asc')->get();
    return view('admin.inout.stockInEquipment',compact('stockins'));
})->middleware(['auth', 'verified'])->name('stockine');

Route::get('/Admin/StockOut', function () {
    $stockouts = Stockout::orderBy('po_date', 'desc')->get();
    //return view('stockin', compact('items'));
    return view('admin.inout.stockOut', compact('stockouts'));
})->middleware(['auth', 'verified'])->name('stockov');

Route::get('/Admin/StockOut/Supplies', function () {
    $stockouts = Stockout::where('type','Supply')->orderBy('po_date', 'desc')->get();
    return view('admin.inout.stockOutSupply',compact('stockouts'));
})->middleware(['auth', 'verified'])->name('stockouts');

Route::get('/Admin/StockOut/Equipment', function () {
    $stockouts = Stockout::where('type','Equipment')->orderBy('po_date', 'desc')->get();
    return view('admin.inout.stockOutEquipment',compact('stockouts'));
})->middleware(['auth', 'verified'])->name('stockouts');

Route::get('/stockout', function () {
    $items = Item::all();
    return view('stockout', compact('items'));
})->middleware(['auth', 'verified'])->name('stockoutv');

Route::get('/purchase-request', function () {
    $items = Item::all();
    return view('purchaserequest', compact('items'));
})->middleware(['auth', 'verified'])->name('purchaser');

Route::get('/items', function () {
    $items = Item::orderBy('unit', 'asc')->get();
    return view('items', compact('items'));
})->middleware(['auth', 'verified'])->name('items');

Route::middleware('auth')->group(function () {
    Route::post('/item-store', [AdminController::class, 'itemstore'])->name('store.item');
    Route::post('/stock-in', [AdminController::class, 'stockin'])->name('stockin');
    Route::post('/stock-out', [AdminController::class, 'stockout'])->name('stockout');
    Route::post('/store-purchase-request', [AdminController::class, 'purchaserequest'])->name('purchaserequest');
    Route::post('/print-all', [AdminController::class, 'downloadpdf'])->name('download');

    Route::get('/item-search-supplies', [AdminController::class, 'searchitemsupplies'])->name('searchitemsupply');
    Route::get('/item-search-equipments', [AdminController::class, 'searchitemequipments'])->name('searchitemequipments');
    Route::get('/item-search', [AdminController::class, 'searchitem'])->name('searchitem');
    Route::get('/stockin-search', [AdminController::class, 'searchstockin'])->name('search');
    Route::get('/stockin-search-supply', [AdminController::class, 'searchstockinSupply'])->name('searchsupp');
    Route::get('/stockin-search-equipment', [AdminController::class, 'searchstockinEquipment'])->name('searchequip');
    Route::get('/stockout-search', [AdminController::class, 'searchstockout'])->name('search2');
    Route::get('/stockout-search-supply', [AdminController::class, 'searchstockoutSupply'])->name('search2supp');
    Route::get('/stockout-search-equipment', [AdminController::class, 'searchstockoutEquipment'])->name('search2equip');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
