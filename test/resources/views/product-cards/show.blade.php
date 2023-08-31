<!DOCTYPE html>
<html>
<head>
    <title>Результаты поиска</title>
</head>
<body>
    <h1>Результаты поиска:</h1>

    <table>
        <thead>
        <tr>
            <th>Наименование товара</th>
            <th>Оптовая цена</th>
            <th>Розничная цена</th>
            <th>Разница в цене</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($concurrency as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->calculatePrice()['opt_price'] }}</td>
                <td>{{ $item->calculatePrice()['retail_price'] }}</td>
                <td>{{ $item->calculatePrice()['retail_price'] - $item->calculatePrice()['opt_price'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
</body>
</html>
