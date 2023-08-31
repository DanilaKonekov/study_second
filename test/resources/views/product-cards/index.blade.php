<!DOCTYPE html>
<html>
<head>
    <title>Product Cards</title>
</head>
<body>
<div>
    <h1>Список карточек товаров</h1>
    <form action="{{ route('product-cards.search') }}" method="GET">
        <input type="text" name="query" placeholder="Поиск..." value="{{ request()->input('query') }}">
        <button type="submit">Найти</button>
    </form>
</div>
<table>
    <thead>
    <tr>
        <th>Название</th>
        <th>Действия</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($productCards as $productCard)
        <tr>
            <td>{{ $productCard->name }}</td>
            <td>
                <a href="{{ route('product-cards.edit', $productCard) }}">Редактировать</a>
                <form action="{{ route('product-cards.destroy', $productCard) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Удалить</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<a href="{{ route('product-cards.create') }}">Создать новую карточку товара</a>
</body>
</html>
