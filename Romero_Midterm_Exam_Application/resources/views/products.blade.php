<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime</title>
</head>
<body>
    <h1>ANIME TITLE</h1>
    <ul>
        @foreach ($products as $product)
            <li>{{ $product['title'] }} - Directed by {{ $product['director'] }}</li>
        @endforeach
    </ul>
</body>
</html>