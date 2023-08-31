<!DOCTYPE html>
<html>
<head>
    <title>Concurrency</title>
</head>
<body>
<div class="concurrency">
    @foreach($concurrencyData as $data)
        <div class="concurrency-entry">
            <h2>{{ $data->productCard->name }}</h2>
            <p>Артикул товара: {{ $data->productCard->article_number }}</p>
            <p>Связанный элемент: {{ $data->sourceItem->name }}</p>
            @php
                $calculatedPrices = $data->productCard->calculatePrice();
            @endphp
            <p>Оптовая цена: {{ $calculatedPrices['opt_price'] }}</p>
            <p>Розничная цена: {{ $calculatedPrices['retail_price'] }}</p>
            <p>Цена разницы: {{ $calculatedPrices['price_difference'] }}</p>        </div>
    @endforeach
</div>
</body>
</html>
