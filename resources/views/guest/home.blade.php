<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <ul>
        @foreach ($movies as $movie)
            <li>
                <h3>
                    {{ $movie->title }}
                </h3>
                <h4>
                    {{ $movie->original_title }}
                </h4>
                <h5>
                    {{ $movie->nationality }}
                </h5>
                <h6>
                    {{ $movie->date }}
                </h6>
                  <div>
                    {{ $movie->vote }}</li>
                </div>
        @endforeach
    </ul>
</body>
</html>
