<!DOCTYPE html>
<html>
<head>
    <title>Создание карточки товара</title>
</head>
<body>
<h1>Создание карточки товара</h1>
<form action="{{ route('source-items.store') }}" method="POST">
    @csrf
    <label for="name">Название:</label>
    <input type="text" name="name" id="name" required>
    <br>
    <label for="opt_price">Оптовая цена:</label>
    <input type="number" name="opt_price" id="opt_price" required>
    <br>
    <label for="retail_price">Розничная цена:</label>
    <input type="number" name="retail_price" id="retail_price" required>
    <br>
    <button type="submit">Создать</button>
</form>
</body>
</html>
