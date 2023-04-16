<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {

        $stocks = Stock::select('date', 'high')->orderBy('id', 'desc')->paginate(5);
        return view('saham.index', compact('stocks'));
    }
}
