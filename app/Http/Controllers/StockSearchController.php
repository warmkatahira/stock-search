<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Stock;
use Illuminate\Http\Request;

class StockSearchController extends Controller
{
    public function index()
    {
        return view('stock_search.index');
    }

    public function search($jan_code)
    {
        // 商品情報を取得
        $search_info = Item::where('individual_jan_code', $jan_code)->first();
        $search_stock_quantity = Stock::where('it_item_code', $search_info['item_code'])->first();
        return response()->json(['search_info' => $search_info, 'search_stock_quantity' => $search_stock_quantity]);
    }
}
