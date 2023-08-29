<?php

namespace App\Http\Controllers;

use App\Models\ProductCard;
use Illuminate\Http\Request;

class ProductCardController extends Controller
{
    public function index()
    {
        $productCards = ProductCard::all();
        return view('product-cards.index', compact('productCards'));
    }

    public function create()
    {
        return view('product-cards.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'article_number' => 'required|unique:product_cards',
            'retail_price' => 'required|numeric',
        ]);

        ProductCard::create($validatedData);

        return redirect()->route('product-cards.index')->with('success', 'Product card created successfully.');
    }

    public function edit(ProductCard $productCard)
    {
        return view('product-cards.edit', compact('productCard'));
    }

    public function update(Request $request, ProductCard $productCard)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'article_number' => 'required|unique:product_cards,article_number,' . $productCard->id,
            'retail_price' => 'required|numeric',
        ]);

        $productCard->update($validatedData);

        return redirect()->route('product-cards.index')->with('success', 'Product card updated successfully.');
    }

    public function destroy(ProductCard $productCard)
    {
        $productCard->delete();

        return redirect()->route('product-cards.index')->with('success', 'Product card deleted successfully.');
    }

    public function searchResults(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'query' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $query = $request->input('query');

        $results = ProductCard::where('name', 'LIKE', "%{$query}%")->get();

        return view('product-cards.results', compact('results'));
    }
    public function show($id)
    {
        // Логика для отображения информации о конкретной карточке товара (по ее идентификатору)
        $productCard = ProductCard::findOrFail($id);

        return view('product-cards.show', compact('productCard'));
    }
}
