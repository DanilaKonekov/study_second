<!DOCTYPE html>
<html>
<head>
    <title>Product Cards</title>
</head>
<body>
<table>
    <tbody>
    <form action="{{ route('product-cards.update', $productCard->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Название:</label>
        <input type="text" name="name" id="name" value="{{ $productCard->name }}" required>
        <br>
        <label for="article_number">Артикул:</label>
        <input type="text" name="article_number" id="article_number" value="{{ $productCard->article_number }}" required>
        <br>
        <label for="retail_price">Розничная цена:</label>
        <input type="text" name="retail_price" id="retail_price" value="{{ $productCard->retail_price }}" required>
        <br>
        <button type="submit">Обновить</button>
    </form>
    </form>
    </tbody>
</table>
</body>
</html>
