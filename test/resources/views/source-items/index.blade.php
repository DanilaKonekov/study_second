<!DOCTYPE html>
<html>
<head>
    <title>Source items</title>
</head>
<body>
<div>
    <h1>Список прайслистов</h1>
    <form action="{{ route('source-items.search') }}" method="GET">
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
    @foreach ($sourceItems as $source)
        <tr>
            <td>{{ $source->name }}</td>
            <td>
                <a href="{{ route('source-items.edit', $source) }}">Редактировать</a>
                <form action="{{ route('source-items.destroy', $source) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Удалить</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<a href="{{ route('source-items.create') }}">Создать новую карточку товара</a>
</body>
</html>
