<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
        }

        p {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: blue;
        }

        a:hover {
            color: darkblue;
        }
    </style>
</head>
<body>
    <h1>Ошибка</h1>
    <p>{{ $error }}</p>
    <a href="{{ route('users.index') }}">Вернуться на главную</a>
</body>
</html>
