<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Document</title>
    </head>

    <body>
        <h1>Это представление</h1>
        <form action="{{ route('create') }}" method="post">
            @csrf
            <label for="name">
                Имя пользователя
                <input type="text" id="name" name="name" />
            </label>
            <button type="submit" name="create">Создать</button>
        </form>
    </body>
</html>
