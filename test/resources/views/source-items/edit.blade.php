<!DOCTYPE html>
<html>
<head>
    <title>Product Cards</title>
</head>
<body>
<table>
    <tbody>
    <form action="{{ route('source-items.update', $sourceItem->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Название:</label>
        <input type="text" name="name" id="name" value="{{ $sourceItem->name }}" required>
        <br>
        <label for="opt_price">Оптовая цена:</label>
        <input type="text" name="opt_price" id="opt_price" value="{{ $sourceItem->opt_price }}" required>
        <br>
        <label for="retail_price">Розничная цена:</label>
        <input type="text" name="retail_price" id="retail_price" value="{{ $sourceItem->retail_price }}" required>
        <br>
        <button type="submit">Обновить</button>
    </form>
    </tbody>
</table>
</body>
</html>
