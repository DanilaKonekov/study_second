<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductCardController;
use App\Http\Controllers\SourceItemController;

Route::get('source-items/search', [SourceItemController::class, 'searchSource'])->name('source-items.search');
Route::get('product-cards/search', [ProductCardController::class, 'searchResults'])->name('product-cards.search');
Route::resource('source-items', SourceItemController::class);
Route::post('product-cards/{productCard}/associate/{sourceItem}', [ProductCardController::class, 'associate']);
Route::resource('product-cards', ProductCardController::class);
Route::get('product-cards/{id}', [ProductCardController::class, 'show'])->name('product-cards.show');

//  должен быть в самом низу
Route::fallback(function (){
    return 'Fallback';
});

