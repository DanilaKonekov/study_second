<!DOCTYPE html>
<html>
<head>
    <title>Создание карточки товара</title>
</head>
<body>
<h1>Создание карточки товара</h1>
<form action="{{ route('product-cards.store') }}" method="POST">
    @csrf
    <label for="name">Название:</label>
    <input type="text" name="name" id="name" required>
    <br>
    <label for="article_number">Артикул:</label>
    <input type="text" name="article_number" id="article_number" required>
    <br>
    <label for="retail_price">Розничная цена:</label>
    <input type="number" name="retail_price" id="retail_price" required>
    <br>
    <button type="submit">Создать</button>
</form>
</body>
</html>
