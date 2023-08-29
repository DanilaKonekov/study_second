<!DOCTYPE html>
<html>
<head>
    <title>Product Cards</title>
</head>
<body>
<table>
    <h1>Список карточек товаров</h1>

    <!-- Форма поиска -->
    <form action="{{ route('product-cards.search') }}" method="GET">
        <input type="text" name="query" placeholder="Поиск..." value="{{ request()->input('query') }}">
        <button type="submit">Найти</button>
    </form>
    <tbody>
    @foreach ($productCards as $productCard)
        <div>
            <h2>{{ $productCard->name }}</h2>
            <!-- Другая информация о карточке товара -->
            <a href="{{ route('product-cards.edit', $productCard) }}">Редактировать</a>
            <form action="{{ route('product-cards.destroy', $productCard) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Удалить</button>
            </form>
        </div>
    @endforeach

    <a href="{{ route('product-cards.create') }}">Создать новую карточку товара</a>
    </tbody>
</table>
</body>
</html>
