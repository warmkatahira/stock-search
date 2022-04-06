<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Stock;

class ItemListController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('item_list.index')->with('items', $items);
    }
}
