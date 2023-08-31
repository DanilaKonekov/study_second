<?php

namespace App\Http\Controllers;

use App\Models\Concurrency;
use Illuminate\Http\Request;

class ConcurrencyController extends Controller
{
    public function index()
    {
        $concurrencyData = Concurrency::with(['productCard', 'sourceItem'])->get();

        return view('concurrency.index', compact('concurrencyData'));
    }
}
