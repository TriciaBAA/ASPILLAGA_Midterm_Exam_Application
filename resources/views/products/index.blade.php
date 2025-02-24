<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Best Selling Books</title>
</head>
<body>
    <div class="container">
        <h1>Best Selling Books</h1>
        @foreach($books as $book)
            <div class="book">
                <h2>{{$book['title']}}</h2>
                <p><strong>Author:</strong> {{ $book['author'] }}</p>
                <p><strong>Genre:</strong> {{ $book['genre'] }}</p>
                <p><strong>Description:</strong> {{ $book['description'] }}</p>
                <p><strong>Ratings:</strong> {{ $book['ratings'] }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>