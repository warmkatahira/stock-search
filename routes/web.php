<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockSearchController;
use App\Http\Controllers\DataImportController;
use App\Http\Controllers\ItemListController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/stock_search', [StockSearchController::class, 'index'])->name('index.stock_search');
Route::get('/stock_search/{jan_code}', [StockSearchController::class, 'search'])->name('search.stock_search');

Route::get('/data_import', [DataImportController::class, 'index'])->name('index.data_import');
Route::post('/data_import/item_info_data_import', [DataImportController::class, 'item_info_data_import'])->name('item_info_data_import');

Route::get('/item_list', [ItemListController::class, 'index'])->name('index.item_list');