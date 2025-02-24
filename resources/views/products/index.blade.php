<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Best Selling Books</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #f5f5d3;
            padding: 20px;
        }
        .container{
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        .book {
            border-bottom: 1px solid gray;
            padding: 10px 0px;
        }
        h1{
            text-align: center;
            border-bottom: 1px solid gray;
            padding: 10px 0px;
            margin-top: 0px; 
        }
        h2{
            color: #253a52
        }
        p{
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Best Selling Books</h1>
        <br>
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