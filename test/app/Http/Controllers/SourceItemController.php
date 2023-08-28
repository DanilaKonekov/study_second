<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SourceItemController extends Controller
{
    public function index()
    {
        $sourceItems = SourceItem::all();
        return response()->json($sourceItems);
    }

    public function show($id)
    {
        $sourceItem = SourceItem::findOrFail($id);
        return response()->json($sourceItem);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'opt_price' => 'required|numeric',
            'retail_price' => 'nullable|numeric',
        ]);

        $sourceItem = SourceItem::create($validatedData);
        return response()->json($sourceItem, 201);
    }

    public function update(Request $request, $id)
    {
        $sourceItem = SourceItem::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string',
            'opt_price' => 'required|numeric',
            'retail_price' => 'nullable|numeric',
        ]);

        $sourceItem->update($validatedData);
        return response()->json($sourceItem, 200);
    }

    public function destroy($id)
    {
        $sourceItem = SourceItem::findOrFail($id);
        $sourceItem->delete();
        return response()->json(null, 204);
    }
}
