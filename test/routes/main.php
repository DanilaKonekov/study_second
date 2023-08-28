<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductCardController;
use App\Http\Controllers\SourceItemController;
use App\Http\Middleware\LogMiddleware;


Route::resource('source-items', SourceItemController::class);
Route::post('product-cards/{productCard}/associate/{sourceItem}', [ProductCardController::class, 'associate']);
Route::resource('product-cards', ProductCardController::class);
Route::middleware([LogMiddleware::class])->group(function () {
    // маршруты здесь
});

//  должен быть в самом низу
Route::fallback(function (){
    return 'Fallback';
});
