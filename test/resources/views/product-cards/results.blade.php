<!DOCTYPE html>
<html>
<head>
    <title>Результаты поиска</title>
</head>
<body>
    <div>
        <h1>Результаты поиска:</h1>
    </div>
    <table>
        <thead>
        <tr>
            <th>Название</th>
            <th>Артикул</th>
            <th>Розничная цена</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($results as $productCard)
            <tr>
                <td>{{ $productCard->name }}</td>
                <td>{{ $productCard->article_number }}</td>
                <td>{{ $productCard->retail_price }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
