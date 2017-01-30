<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StockItem;

class StockItemController extends Controller
{
    public function index()
    {
        $stockItems = StockItem::get();
        return view('stock.index', compact('stockItems'));
    }

    public function detail(StockItem $item)
    {
        return view('stock.detail', compact('item'));
    }
}
