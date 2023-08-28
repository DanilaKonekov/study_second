<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCard;
use App\Models\SourceItem;

class ProductCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productCards = ProductCard::all();
        return response()->json($productCards);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'article_number' => 'required|string',
            'retail_price' => 'nullable|numeric',
        ]);

        $productCard = ProductCard::create($validatedData);
        return response()->json($productCard, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $productCard = ProductCard::findOrFail($id);
        return response()->json($productCard);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $productCard = ProductCard::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string',
            'article_number' => 'required|string',
            'retail_price' => 'nullable|numeric',
        ]);
        $productCard->update($validatedData);
        return response()->json($productCard, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $productCard = ProductCard::findOrFail($id);
        $productCard->delete();
        return response()->json(null, 204);
    }
    public function associate(ProductCard $productCard, SourceItem $sourceItem)
    {
        // Проверка, что карточка товара и товар источник принадлежат пользователю или другая логика безопасности

        $productCard->sourceItems()->attach($sourceItem);

        return response()->json(['message' => 'Товары успешно сопоставлены']);
    }
}

