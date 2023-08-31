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
            <th>Оптовая цена</th>
            <th>Розничная цена</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($results as $source)
            <tr>
                <td>{{ $source->name }}</td>
                <td>{{ $source->opt_price }}</td>
                <td>{{ $source->retail_price }}</td>
            </tr>
            <td>
                <a href="{{ route('source-items.edit', $source) }}">Редактировать</a>
                <form action="{{ route('source-items.destroy', $source) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Удалить</button>
                </form>
            </td>
        @endforeach
        </tbody>
    </table>
</body>
</html>
